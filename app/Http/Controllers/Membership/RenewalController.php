<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\Membership\Register;
use Illuminate\Http\Request;

use App\Http\Controllers\CcAvenues\PaymentController;
use App\Http\Controllers\Payment\OfflineController;
use App\Models\Membership\Category;

class RenewalController extends Controller
{
    private $payment;
    private $offline;
    private $registerController;

    public function __construct(PaymentController $payment, OfflineController $offline, RegisterController $registerController)
    {
        $this->payment = $payment;
        $this->offline = $offline;
        $this->registerController = $registerController;
    }

    public function renewal(Request $request){
        if($request['membership_category_id']){
            $membership_type_id = Category::where('id',$request['membership_category_id'])->first('membership_type_id')->membership_type_id;
        }

        $this->registerController->membershipUpdate($request['id'],$request['payment_mode'],$membership_type_id, $request['hospital_category_id']);

        $response = $this->registerController->payableAmount($request);
        $jsonContent = $response->getContent();
        $dataArray = json_decode($jsonContent, true);

        // for payment
        $info = Register::where('id',$request->id)->with('getLatestMembershipDetail')->first();

        $name = (isset($info->organization_name) && $info->organization_name != null) ? $info->organization_name : ($info->first_name .' '. $info->last_name) ;
        $registers_detail_id = $info->getLatestMembershipDetail->id;
        $email = $info->email;

        $amount = $dataArray['data']['payable_amount'];
        $curreny = $dataArray['data']['currency_type'];

        if($request['payment_mode'] == 'Offline'){
            return $this->offline->payment($name,$email,$registers_detail_id,$amount,$curreny);
        }
        if($request['payment_mode'] == 'Online'){
            return $this->payment->initiatePayment($name,$email,$registers_detail_id,$amount,$curreny);
        }
    }
}
