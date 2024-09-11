<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Mail\OfflinePaymentSuccessMail;
use App\Models\Membership\Category;
use App\Models\Membership\Register;
use App\Models\Membership\RegisterDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfflineController extends Controller
{
    public function index()
    {
        return view('payment.offline_thank_you');
    }

    public function payment($name,$email,$registers_detail_id,$amount,$curreny)
    {
        $updates = [
            "price" => $amount,
            "currency_code" => $curreny,
            "currency_symbol" => $curreny == 'INR' ? '₹' : '$'
        ];
        RegisterDetail::where('id',$registers_detail_id)->update($updates);
        
        $registerDetail = RegisterDetail::where('id',$registers_detail_id)->first();
        $info = Register::where('id',$registerDetail->membership_register_id)->with('getLatestMembershipDetail')->first();


        $info['membership_category_name'] = Category::where('id', $info->membership_category_id)->first();
        if ($info['membership_category_name']) {
            $info['membership_category_name'] = $info['membership_category_name']->type .' '. $info['membership_category_name']->name;
        }

        $email = isset($info->hospital_email) ? $info->hospital_email : $info->email;

        Mail::to($email)->send(new OfflinePaymentSuccessMail($info));
        
        return redirect()->route('offline-payment.success')->with('success', 'Payment processed offline successfully.');
    }
}
