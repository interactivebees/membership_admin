<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMembershipCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "payment_mode" => 'required|in:Online,Offline',
            'hospital_category_id' => 'required',
            'organization_name'=> 'required',
            'numbers_of_beds_in_hospital' => 'numeric',
            'hospital_email' => 'required|string',
            'street_address'=> 'string|nullable',
            'pin_code'=> 'string|nullable',
            'state'=> 'string|nullable',
            'city'=> 'string|nullable',
            'district'=> 'string|nullable',

            'pan_no' => 'string|nullable',
            'gst_registration_number' => 'string|nullable',
            'hospital_mobile' => 'required',

            'hospital_website_link' => 'string|nullable',
            'hospital_LinkedIn_link' => 'string|nullable',
            'hospital_facebook_link' => 'string|nullable',
            'hospital_instagram_link' => 'string|nullable',
            'hospital_twitter_link' => 'string|nullable',

            'accreditation_category' => 'string|nullable',
            'tier_classification' => 'string|nullable',
            'hospital_location' => 'string|nullable',
            'core_services_hospital.*' => 'string|nullable',
            'support_services_hospital.*' => 'string|nullable',
            'diagnostic_centre' => 'string|nullable',

            'oh_title' => 'string|nullable',
            'oh_first_name' => 'string|nullable',
            'oh_last_name' => 'string|nullable',
            'oh_designation' => 'string|nullable',
            'oh_mobile_no' => 'string|nullable',
            'oh_emailID' => 'string|nullable',
            'oh_whatsApp_contact_no' => 'string|nullable',

            'one_title' => 'string|nullable',
            'one_first_name' => 'string|nullable',
            'one_last_name' => 'string|nullable',
            'one_designation' => 'string|nullable',
            'one_mobile_no' => 'string|nullable',
            'one_emailID' => 'string|nullable',
            'one_whatsApp_contact_no' => 'string|nullable',

            'two_title' => 'string|nullable',
            'two_first_name' => 'string|nullable',
            'two_last_name' => 'string|nullable',
            'two_designation' => 'string|nullable',
            'two_mobile_no' => 'string|nullable',
            'two_emailID' => 'string|nullable',
            'two_whatsApp_contact_no' => 'string|nullable'
        ];
    }
}
