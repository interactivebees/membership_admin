@extends('layouts.guest')
@section('content')
<section class="wraper">
    <div class="container-fluid p-0">
        <div class="d-flex">
            @include('layouts.sidebar')
            <div class="right dash-right">
            @include('layouts.user-header')
                <div class="admin-right right-dashboard">
                    <div class="main-dash" id="main-dash1">
                        <div classs="row">
                            <div class="col-md-12">
                                @if ($membership->form_type == 'personal')
                                    <!-- Edit Profile Section -->
                                    @include('membership.membership-backend.block.edit-profile')
                                    <!--Ends Here-->
                                    @include('membership.membership-backend.block.edit-quality-organaization')

                                @endif
                                {{-- @dd($membership) --}}
                                @if ($membership->form_type == 'hospital' || $membership->form_type == 'diagnostic')
                                    <!-- Edit Organization Details Section -->
                                    @include('membership.membership-backend.block.edit-organaization-det',[
                                        'organization_name' => $membership->organization_name,
                                        'hospital_mobile' => $membership->hospital_mobile,
                                        'pan_no' => $membership->pan_no,
                                        'numbers_of_beds_in_hospital' => $membership->numbers_of_beds_in_hospital,
                                        'gst_registration_number' => $membership->gst_registration_number,
                                        'organization_head' => $membership->organization_head,
                                        'hospital_social' => $membership->hospital_social,
                                        'hospital_address' => $membership->hospital_address
                                    ])
                                    <!--Ends Here-->

                                    <!-- Edit healthcare institution Details Section -->
                                    @if ($membership->form_type != 'diagnostic')
                                        @include('membership.membership-backend.block.edit-healthcare-institution')
                                    @endif
                                    <!--Ends Here-->

                                    <!-- Edit Organaization Head Details Section -->
                                    @include('membership.membership-backend.block.edit-organaization-head', [
                                        'organization_head' => $membership->organization_head
                                    ])
                                    <!--Ends Here-->

                                    <!-- Edit Contact Organaization 1 Details Section -->
                                    @include('membership.membership-backend.block.edit-organaization-1', [
                                        'contact_person_representing_organization_one' => $membership->contact_person_representing_organization_one
                                    ])
                                    <!--Ends Here-->

                                    <!-- Edit Contact Organaization 1 Details Section -->
                                    @if ($membership->form_type != 'diagnostic')
                                        @include('membership.membership-backend.block.edit-organaization-2', [
                                            'contact_person_representing_organization_two' => $membership->contact_person_representing_organization_two
                                        ])
                                    @endif

                                    @if ($membership->form_type == 'diagnostic')
                                        @include('membership.membership-backend.block.core-diagnostic-services')
                                    @endif
                                    <!--Ends Here-->
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function validateInput(event) {
    const regex = /^[a-zA-Z\s]*$/; // Allow only letters and spaces
    const input = event.target.value;
    if (!regex.test(input)) {
        event.target.value = input.replace(/[^a-zA-Z\s]/g, '');
    }
}
function noSpecialCharacters(event) {
    const regex = /^[A-Z0-9]+$/;
    const input = event.target.value;
    if (!regex.test(input)) {
        event.target.value = input.replace(/[^A-Z0-9]/g, '');
    }
}
function hasOnlySpaces(input) {
    return input.trim().length === 0;
}
function isValidPinCode(pin) {
    const pinRegex = /^\d{6}$/;
    return pinRegex.test(pin);
}
function validateForm(event) {
    const fields = [
        { name: 'organization_name' },
        { name: 'state' },
        { name: 'city' },
        { name: 'district' },
        { name: 'pan_no' },
        { name: 'gst_registration_number' },
        { name: 'pin_code' },
    ];

    let isValid = true;

    fields.forEach(field => {
        const inputElement = document.querySelector(`[name="${field.name}"]`);
        if (field.name=='pin_code') {
            if (!isValidPinCode(inputElement.value)) {
                inputElement.classList.add('is-invalid');
                isValid = false;
            } else {
                inputElement.classList.remove('is-invalid');
            }
        }
        else
        {
            if (hasOnlySpaces(inputElement.value)) {
                inputElement.classList.add('is-invalid');
                isValid = false;
            } else {
                inputElement.classList.remove('is-invalid');
            }
        }    
    });
    if (!isValid) {
        event.preventDefault(); // Prevent form submission
    }
}
</script>
@endsection
