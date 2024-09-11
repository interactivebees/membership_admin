<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\Membership\MembershipRegCoreDiagService;
use App\Models\Membership\Register;
use App\Models\User;
use App\Models\Membership\RegisterDetail;
use Illuminate\Http\Request;

use App\Traits\ImageTrait;

class UpdateController extends Controller
{
    use ImageTrait;
    
    public function organizationDetail(Request $request)
    {
        $dataPost = [
            'organization_name' => $request['organization_name'],
            'numbers_of_beds_in_hospital' => $request['numbers_of_beds_in_hospital'],

            'hospital_address' => json_encode([
                'street_address' => $request['street_address'] ?? '',
                'pin_code' => $request['pin_code'] ?? '',
                'state' => $request['state'] ?? '',
                'city' => $request['city'] ?? '',
                'district' => $request['district'] ?? '',
            ]),

            'pan_no' => $request['pan_no'],
            'gst_registration_number' => $request['gst_registration_number'],
            'hospital_mobile' => $request['hospital_mobile'],

            'hospital_social' => json_encode([
                'hospital_website_link' => $request['hospital_website_link'] ?? '',
                'hospital_linkedIn_link' => $request['hospital_linkedIn_link'] ?? '',
                'hospital_facebook_link' => $request['hospital_facebook_link'] ?? '',
                'hospital_instagram_link' => $request['hospital_instagram_link'] ?? '',
                'hospital_twitter_link' => $request['hospital_twitter_link'] ?? '',
            ]),
        ];
        
        if($request->hasFile('hospital_logo')){
            if($name = $this->verifyAndUpload($request->hospital_logo, 'hospital_images')){
                $dataPost['hospital_logo'] = $name;
            }
        }
        $info = Register::where('id', $request['id'])->first();
        if ($info) {
            $info->update($dataPost);
            User::where('id', $info->user_id)->update(['name' => $request['organization_name']]);
        }
        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }

    public function organizationDetailHead(Request $request)
    {
        $dataPost = [
            'organization_head' => json_encode([
                'oh_title' => $request['oh_title'] ?? '',
                'oh_first_name' => $request['oh_first_name'] ?? '',
                'oh_last_name' => $request['oh_last_name'] ?? '',
                'oh_designation' => $request['oh_designation'] ?? '',
                'oh_mobile_no' => $request['oh_mobile_no'] ?? '',
                'oh_emailID' => $request['oh_emailID'] ?? '',
                'oh_whatsApp_contact_no' => $request['oh_whatsApp_contact_no'] ?? '',
            ])
        ];
        $info = Register::where('id', $request['id'])->update($dataPost);

        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }

    public function organizationDetailOne(Request $request)
    {
        $dataPost = [
            'contact_person_representing_organization_one' => json_encode([
                'one_title' => $request['one_title'] ?? '',
                'one_first_name' => $request['one_first_name'] ?? '',
                'one_last_name' => $request['one_last_name'] ?? '',
                'one_designation' => $request['one_designation'] ?? '',
                'one_mobile_no' => $request['one_mobile_no'] ?? '',
                'one_emailID' => $request['one_emailID'] ?? '',
                'one_whatsApp_contact_no' => $request['one_whatsApp_contact_no'] ?? '',
            ])
        ];
        $info = Register::where('id', $request['id'])->update($dataPost);

        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }

    public function organizationDetailTwo(Request $request)
    {
        $dataPost = [
            'contact_person_representing_organization_two' => json_encode([
                'two_title' => $request['two_title'] ?? '',
                'two_first_name' => $request['two_first_name'] ?? '',
                'two_last_name' => $request['two_last_name'] ?? '',
                'two_designation' => $request['two_designation'] ?? '',
                'two_mobile_no' => $request['two_mobile_no'] ?? '',
                'two_emailID' => $request['two_emailID'] ?? '',
                'two_whatsApp_contact_no' => $request['two_whatsApp_contact_no'] ?? '',
            ])
        ];
        $info = Register::where('id', $request['id'])->update($dataPost);

        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }


    public function organizationHealthcareInstitution(Request $request)
    {
        $dataPost = [
            'accreditation_category' => $request['accreditation_category'],
            'tier_classification' => $request['tier_classification'],
            'hospital_location' => $request['hospital_location'],
            'diagnostic_centre' => $request['diagnostic_centre'],
            'core_services_hospital' => json_encode($request['core_services_hospital']),
            'support_services_hospital' => json_encode($request['support_services_hospital'])
        ];
        $info = Register::where('id', $request['id'])->update($dataPost);

        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }


    public function profileUpdate(Request $request)
    {
        $dataPost = [
            'profession' => $request['profession'],
            'title' => $request['title'],
            // 'first_name' => $request['first_name'],
            // 'last_name' => $request['last_name'],
            // 'email' => $request['email'],

            'personal_address' => json_encode([
                'street_address' => $request['street_address'] ?? '',
                'pin_code' => $request['pin_code'] ?? '',
                'state' => $request['state'] ?? '',
                'city' => $request['city'] ?? '',
            ]),

            'pan_no' => $request['pan_no'],
            'personal_mobile' => $request['personal_mobile'],

            'educational_qualification' => $request['educational_qualification'],
            'other_educational_qualification' => $request['other_educational_qualification'],

            'personal_social' => json_encode([
                'personal_LinkedIn_link' => $request['personal_LinkedIn_link'] ?? '',
                'personal_facebook_link' => $request['personal_facebook_link'] ?? '',
                'personal_instagram_link' => $request['personal_instagram_link'] ?? '',
                'personal_twitter_link' => $request['personal_twitter_link'] ?? '',
            ])
        ];

        $info = Register::where('id', $request['id'])->update($dataPost);

        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }


    public function personalDetail(Request $request)
    {
        $dataPost = [
            'organization_name' => $request['organization_name'],
            'personal_designation' => $request['personal_designation'],
            'role' => $request['role'],
            'specialization' => $request['specialization'],
            'working_organization' => json_encode($request['working_organization']),
            'quality_implementer' => json_encode($request['quality_implementer']),
            'area_of_interest' => $request['area_of_interest'],
            'testimonial' => json_encode($request['testimonial'])
        ];
        $info = Register::where('id', $request['id'])->update($dataPost);
        
        if ($info) {
            return redirect()->back()->with('success', 'You Detail updated successfully.');
        }
        return redirect()->back()->with('warning', 'You Detail not updated! try Again.');
    }

    public function coreServicePost(Request $request)
    {
        $data = $request->all();

        foreach ($data['cs_core_service_name'] as $index => $coreServiceName) {
            if (isset($data['cs_id'][$index]) && !empty($data['cs_id'][$index])) {
                $coreService = MembershipRegCoreDiagService::find($data['cs_id'][$index]);
            } else {
                $coreService = new MembershipRegCoreDiagService();
            }

            $coreService->membership_register_id = $request['membership_register_id'];
            $coreService->cs_core_service_name = $coreServiceName;
            $coreService->cs_name = $data['cs_name'][$index];
            $coreService->cs_designation = $data['cs_designation'][$index];
            $coreService->cs_email = $data['cs_email'][$index];
            $coreService->cs_mobile = $data['cs_mobile'][$index];
            $coreService->cs_status = $data['cs_status'][$index];
            $coreService->save();
        }

        return redirect()->back()->with('success', 'You Detail updated successfully.');
    }
}
