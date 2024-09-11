@php
    $professions = [
        "Doctor",
        "Nurse",
        "Physician Assistant",
        "Paramedic",
        "Administrator",
        "Therapist",
        "Medical Technologist and Technician",
        "Surgeon",
        "Dentist",
        "Dietitians and Nutritionist",
        "Optometrist",
        "Mental Health Professional",
        "Chiropractor",
        "Midwives",
        "Paramedics and Emergency Medical Technician (EMTs)",
        "Physiotherapist",
        "Health Informatics Professional",
        "Medical Transcriptionist",
        "Health Educators and Community Health Worker",
        "Bio Medical Engineer",
        "Facility Engineer",
        "Research Professional",
        "Non- Allopathy Practitioner",
        "Others",
    ];

    $titles = [
        "Mr",
        "Ms",
        "Dr",
        "Mrs",
        "Sr",
        "Prof",
    ];

    $educationalQualifications = [
        "Doctor of Medicine (MD)",
        "Bachelor of Medicine (MBBS)",
        "Bachelor of Surgery (MBBS)",
        "Doctor of Osteopathic Medicine (DO)",
        "Bachelor of Science in Nursing (BSN)",
        "Master of Science in Nursing (MSN)",
        "Doctor of Nursing Practice (DNP)",
        "Doctor of Pharmacy (PharmD)",
        "Doctor of Dental Surgery (DDS)",
        "Doctor of Dental Medicine (DMD)",
        "Doctor of Veterinary Medicine (DVM)",
        "Doctor of Physical Therapy (DPT)",
        "Bachelor of Pharmacy (BPharm)",
        "Bachelor of Science in Medical Laboratory Science (MLS)",
        "Bachelor of Science in Radiologic Technology (BSRT)",
        "Bachelor of Science in Occupational Therapy (BSOT)",
        "Bachelor of Medical Science (BMedSci)",
    ];
@endphp


<div class="members-section active" id="personal-details">
    {{-- For Single selection --}}
    <div id="single_hospital_details">
        <div class="input-group select-cat mt-5" >
            <label>Select Category*</label>
            <select name="hospital_category_id" class="classification @error('hospital_category_id') is-invalid @enderror" required>
                <option value="">Select</option>
                @foreach ($hospitalCategories as $hospitalCategorie)
                    <option value="{{ $hospitalCategorie->id }}" {{ old('hospital_category_id') === $hospitalCategorie->id ? 'selected' : '' }}>{{ $hospitalCategorie->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="inner-box">
        <h4 class="membership-heading">Personal Details*</h4>
        <ul class="full-form">
            <input type="text" name="membership_category_id" placeholder="" value="{{ request()->get('membership') }}" required hidden>

            <li>
                <div class="input-group">
                    <label>Select Profession*</label>
                    <Select class="" name="profession">
                        @foreach($professions as $profession)
                        <option value="{{ $profession }}" {{ old('profession') === $profession ? 'selected' : '' }}>{{ $profession }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Title*</label>
                    <Select class="" name="title" required>
                        @foreach($titles as $title)
                        <option value="{{ $title }}" {{ old('title') === $title ? 'selected' : '' }}>{{ $title }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>First Name*</label>
                    <input type="text" name="first_name" placeholder="" value="{{ old('first_name') }}" class="@error('first_name') is-invalid @enderror" required>
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>Last Name*</label>
                    <input type="text" name="last_name" placeholder="" value="{{ old('last_name') }}" class="@error('last_name') is-invalid @enderror" required>
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>Email ID* </label>
                    <input type="text" name="email" placeholder="" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" required>
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>WhatsApp Mobile No.*</label>
                    <input type="text" name="personal_mobile" placeholder="" value="{{ old('whatsApp_contact_no') }}" class="@error('whatsApp_contact_no') is-invalid @enderror" required>
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>Residential Address*</label>
                    <input type="text" name="street_address" placeholder="" value="{{ old('street_address') }}" class="@error('street_address') is-invalid @enderror" required>
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>State*</label>
                    <select name="state" class="@error('state') is-invalid @enderror" required>
                        <option>Please Select</option>
                    </select>
                    <!-- <input type="text" name="state" placeholder="" value="{{ old('state') }}" class="@error('state') is-invalid @enderror" required> -->
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>City*</label>
                    <select name="city" class="@error('city') is-invalid @enderror" required>
                        <option>Please Select</option>
                    </select>
                    <!-- <input type="text" name="city" placeholder="" value="{{ old('city') }}" class="@error('city') is-invalid @enderror"> -->
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>Pin Code*</label>
                    <input type="text" name="pin_code" placeholder="" value="{{ old('pin_code') }}"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="@error('pin_code') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>PAN No.</label>
                    <input type="text" name="pan_no" placeholder="" maxlength="10" minlength="10" value="{{ old('pan_no') }}">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Educational Qualification*</label>
                    <Select class="" name="educational_qualification">
                        @foreach($educationalQualifications as $educationalQualification)
                        <option value="{{ $educationalQualification }}" {{ old('educational_qualification') === $educationalQualification ? 'selected' : '' }}>{{ $educationalQualification }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Other Educational Qualification</label>
                    <input type="text" name='other_educational_qualification' placeholder="" value="{{ old('other_educational_qualification') }}"
                        class="@error('other_educational_qualification') is-invalid @enderror">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Facebook Link</label>
                    <input type="text" placeholder="" value="{{ old('personal_facebook_link') }}"
                        class="@error('personal_facebook_link') is-invalid @enderror" name='personal_facebook_link'>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Twitter Link</label>
                    <input type="text" placeholder="" value="{{ old('personal_twitter_link') }}"
                        class="@error('personal_twitter_link') is-invalid @enderror" name='personal_twitter_link'>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>LinkedIn Link</label>
                    <input type="text" placeholder="" value="{{ old('personal_LinkedIn_link') }}"
                        class="@error('personal_LinkedIn_link') is-invalid @enderror" name='personal_LinkedIn_link'>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Instagram Link</label>
                    <input type="text" placeholder="" value="{{ old('personal_instagram_link') }}"
                        class="@error('personal_instagram_link') is-invalid @enderror" name='personal_instagram_link'>
                </div>
            </li>
        </ul>
    </div>
    <ul class="full-form">
        <li class="full text-right">
            <button type="button" class="btn-submit" id="quality-step-2">Continue</button>
        </li>
    </ul>
</div>
