<?php

use App\Models\Membership\HospitalBedCategory;
use App\Models\Membership\Membership;
use Carbon\Carbon;
use App\Models\Membership\Register;


if (!function_exists('humanReadableDateDiff')) {
    function humanReadableDateDiff($providedDate)
    {
        $providedDate = Carbon::parse($providedDate);
        $currentDate = Carbon::now();

        return $providedDate->diffForHumans($currentDate);
    }
}

if(!function_exists('dateFormate')){
    function dateFormate($string){
        $date = new DateTime($string);
        return $date->format('d-m-Y');
    }
}

if (!function_exists('membershipNameById')){
    function membershipNameById($id){
        return Membership::find($id)->name;
    }
}



if(!function_exists('addressFormating')){
    function addressFormating($jsonString){
        $addressArray = json_decode($jsonString, true);
        if ($addressArray !== null) {
            $formattedAddress = $addressArray['street_address'] . ', ' . $addressArray['city'] . ', ' . $addressArray['district'] . ', ' . $addressArray['state'] . ' - ' . $addressArray['pin_code'];
            return $formattedAddress;
        } else {
            return '';
        }
    }
}


if(!function_exists('subscriptionCategoryNameById')){
    function subscriptionCategoryNameById($id){
        return HospitalBedCategory::find($id)->name;
    }
}


if(!function_exists('getAvatarByUserId')){
    function getAvatarByUserId($id){
        return Register::where('user_id',$id)->first()->hospital_logo;
    }
}

if(!function_exists('formatTrackingID')){
    function formatTrackingID($trackingID) {
        if ($trackingID === '') {
            return null;
        }
        if (preg_match('/^\d{12}$/', $trackingID)) {
            return substr_replace($trackingID, ' **** **** ', 0, 8);
        } else {
            return null;
        }
    }
}

if(!function_exists('getUserDesignation')){
    function getUserDesignation($id){
        return Register::where('user_id',$id)->first()->personal_designation;
    }
}
