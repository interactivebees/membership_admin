<?php

namespace App\Http\Controllers\CcAvenues;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership\RegisterDetail;
use App\Mail\PaymentSuccessFailiorMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Membership\Register;


class PaymentController extends Controller
{
    private $crypto;

    public function __construct(CryptoController $crypto)
    {
        $this->crypto = $crypto;
    }

    public function initiatePayment($name,$email,$registers_detail_id,$amount,$curreny)
    {
        $parameters = [
            'registers_detail_id' => $registers_detail_id,
            'merchant_id' => env('CCAVENUE_MERCHANT_ID'),
            'redirect_url' => env('CCAVENUE_REDIRECT_URL'),
            'cancel_url' => env('CCAVENUE_REDIRECT_URL'),
            'currency' => $curreny,
            'language' =>  'EN',
            'order_id' => $registers_detail_id,
            'amount' => $amount,
            'name' =>   $name,
            'email' => $email,
            'billing_name' => $name,
            'billing_email' => $email,
        ];

        // Calculate a checksum to be sent to CCAvenue for secure validation
        $merchant_data = '';
        foreach ($parameters as $key => $value) {
            $merchant_data .= $key . '=' . $value . '&';
        }
        $encrypted_data = $this->crypto->encrypt($merchant_data, env('CCAVENUE_ENCRYPTION_KEY'));
        $access_code = env('CCAVENUE_ACCESS_CODE');

        // Create an array of data to send to CCAvenue
        $requestData = [
            'access_code' =>  $access_code,
            'encRequest' => $encrypted_data
        ];
        // Redirect to CCAvenue for payment
        return view('ccavenue.form', [
            'encryptedData' => $requestData,
        ]);
    }

    public function paymentResponse(Request $request){
        $data = $request->all();
        if($data){
            $orderNo = $data['orderNo'];
            $encResp = $data['encResp'];
            $decrypted_data = $this->crypto->decrypt($encResp, env('CCAVENUE_ENCRYPTION_KEY'));
            
            $decryptValues = explode('&', $decrypted_data);
            $resJson = [];
            foreach ($decryptValues  as $key => $val) {
                $str = explode('=', $val);
                $resJson[$str[0]] = $str[1];
            }
            
            $updates = [
                "order_status" => $resJson['order_status'],
                "status_message" => $resJson['status_message'],
                "tracking_id" => $resJson['tracking_id'],
            ];
            
            RegisterDetail::where('id',$orderNo)->update($updates);
            
            $registerDetail = RegisterDetail::where('id',$orderNo)->first();
            
            $info = Register::where('id',$registerDetail->membership_register_id)->with('getLatestMembershipDetail')->first();
            $email = isset($info->hospital_email) ? $info->hospital_email : $info->email;
            
            Mail::to($email)->send(new PaymentSuccessFailiorMail($info));
            
            if ($resJson['order_status'] === 'Success') {
                return view('ccavenue.success');
            } elseif ($resJson['order_status'] === 'Aborted') {
                return view('ccavenue.failure');
            } else {
                return view('ccavenue.failure');
            }
        }
    }
}
