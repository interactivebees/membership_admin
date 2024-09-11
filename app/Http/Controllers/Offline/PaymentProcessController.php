<?php

namespace App\Http\Controllers\Offline;

use App\Http\Controllers\Controller;
use App\Models\Membership\OfflinePaymentVerificationData;
use Illuminate\Http\Request;

use App\Models\Membership\Register;
use App\Traits\ImageTrait;



class PaymentProcessController extends Controller
{
    use ImageTrait;
    
    public function index(){
        $info = Register::with('membershipCategoryget','getLatestMembershipDetail')
            ->where('user_id',auth()->user()->id)->first();
            
        // dd($info);    
        return view('offline_payment.offline_payment_process',compact('info'));
    }

    public function methods(){
        $info = Register::with('getLatestMembershipDetail')
            ->where('user_id',auth()->user()->id)->first();
        return view('offline_payment.payment_process',compact('info'));
    }

    public function postVerificationData(Request $request){
        $request->validate([
            "membership_register_id" => 'required',
            "utr_transaction_number" => 'required|nullable',
            "payment_mode" => 'required|in:bank,qrcode',
            "file" => 'required',
        ]);

        $check = OfflinePaymentVerificationData::where('membership_register_id',$request['membership_register_id'])->first();
        if($check){
            return redirect()->route('payment.thank.you')->with('warning','You Have Already Submitted.');
        }else{
            $verificationData = new OfflinePaymentVerificationData();
            $verificationData->membership_register_id = $request->input('membership_register_id');
            $verificationData->utr_transaction_number = $request->input('utr_transaction_number');
            $verificationData->payment_mode = $request->input('payment_mode');

            // Assuming you are storing the file path in the database
            $verificationData->file = $request->file('file')->store('offline_verification_data');
            
            
            if($request->hasFile('file')){
                if($name = $this->verifyAndUpload($request->file, 'ofline_payment_image')){
                    $verificationData->file = $name;
                }
            }
            
            $verificationData->save();
            
        }
        return redirect()->route('payment.thank.you');
    }

    public function thanku(){
        return view('offline_payment.payment_thank_you');
    }
}
