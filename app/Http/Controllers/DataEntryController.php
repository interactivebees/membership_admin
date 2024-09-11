<?php

namespace App\Http\Controllers;

use App\Models\Membership\Register;
use App\Models\RevempMembershipRegisters;
use Illuminate\Http\Request;

class DataEntryController extends Controller
{
    public function membershipData(){
        $datas = RevempMembershipRegisters::all();

        // Prepare an array of data for insertion
        $insertData = [];

        foreach ($datas as $record) {
            $insertData[] = [
                'hospital_type' => $record['hospital_type'] ?? 'NA',
                'parent_hospital_name' => $record['group_hospital_name'] ?? 'NA',
                'no_of_hospital_in_parent' => $record['no_of_hospital_in_the_group'] ?? 0,

                'hospital_category_id' => $record['hospital_category_id'],
                'organization_name' => $record['organization_name'],
                'numbers_of_beds_in_hospital' => $record['numbers_of_beds_in_hospital'],
                'hospital_email' => $record['hospital_email'],

                'membership_category_id' => $this->membershipTypeId($record['membership_category_id']),
                'membership_number' => $record['RegistrationNO'],

                'hospital_address' => json_encode([
                    'street_address' => $record['address'] ?? '',
                    'pin_code' => $record['pincode'] ?? '',
                    'state' => $record['state'] ?? '',
                    'city' => $record['city'] ?? '',
                    'district' => $record['district'] ?? '',
                ]),

                'pan_no' => $record['pan_no'],
                'gst_registration_number' => $record['gst_registration_number'],
                'hospital_mobile' => $record['hospital_mobile'],




                'hospital_logo' => $record['hospital_logo'],

                'accreditation_category' => $record['accreditation_category'],
                'tier_classification' => $record['tier_classification'],
                'hospital_location' => $record['hospital_location'],
                'core_services_hospital' => json_encode($record['core_services_hospital']),
                'support_services_hospital' => json_encode($record['support_services_hospital']),
                'diagnostic_centre' => $record['diagnostic_centre'],

                'hospital_social' => json_encode([
                    'hospital_website_link' => $record['website'] ?? '',
                    'hospital_linkedIn_link' => $record['linledin'] ?? '',
                    'hospital_facebook_link' => $record['fb'] ?? '',
                    'hospital_instagram_link' => $record['insta'] ?? '',
                    'hospital_twitter_link' => $record['twit'] ?? '',
                ]),

                'organization_head' => json_encode([
                    'oh_title' => $record['headtitle'] ?? '',
                    'oh_first_name' => $record['headfname'] ?? '',
                    'oh_last_name' => $record['headlname'] ?? '',
                    'oh_designation' => $record['head_designation'] ?? '',
                    'oh_mobile_no' => $record['head_tel'] ?? '',
                    'oh_emailID' => $record['head_email'] ?? '',
                    'oh_whatsApp_contact_no' => $record['head_mobile'] ?? '',
                ]),

                'contact_person_representing_organization_one' => json_encode([
                    'one_title' => $record['first_person_title'] ?? '',
                    'one_first_name' => $record['first_person_fname'] ?? '',
                    'one_last_name' => $record['first_person_lnaame'] ?? '',
                    'one_designation' => $record['first_person_designation'] ?? '',
                    'one_mobile_no' => $record['first_person_tel'] ?? '',
                    'one_emailID' => $record['first_person_email'] ?? '',
                    'one_whatsApp_contact_no' => $record['first_person_mobile'] ?? '',
                ]),

                'contact_person_representing_organization_two' => json_encode([
                    'two_title' => $record['second_person_title'] ?? '',
                    'two_first_name' => $record['second_person_fname'] ?? '',
                    'two_last_name' => $record['second_person_lname'] ?? '',
                    'two_designation' => $record['second_person_designation'] ?? '',
                    'two_mobile_no' => $record['second_person_tel'] ?? '',
                    'two_emailID' => $record['second_person_email'] ?? '',
                    'two_whatsApp_contact_no' => $record['second_person_mobile'] ?? '',
                ]),
            ];
        }

        dd($insertData);
        // Register::insert($insertData);

        return $datas;
    }


    private function membershipTypeId($membership_id){
        $ids = [
            1 =>'99d4a844-898a-454d-884c-7a5b6327fb6f',
            2 =>'99d4a858-c6dc-41a8-8811-52cfd6deea75',
            3 =>'99d4a844-898a-454d-884c-7a5b6327fass',
            4 =>'99d4a858-c6dc-41a8-8811-52cfd6deeass',
            5 =>'99d4a858-c6dc-41a8-8811-52cfd6deeatu',
            6 =>'99d4a858-c6dc-41a8-8811-52cfd6deezxs',
            7 =>'99d4a858-c6dc-41a8-8811-52cfd6depojm',
            8 =>'99d4a858-c6dc-41a8-8811-52cfd6depojr',
        ];
        return $ids[$membership_id] ?? 'NA';
    }
}
