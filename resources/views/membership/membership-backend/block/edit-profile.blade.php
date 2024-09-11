@php
    $professions = ['Doctor', 'Nurse', 'Physician Assistant', 'Paramedic', 'Administrator', 'Therapist', 'Medical Technologist and Technician', 'Surgeon', 'Dentist', 'Dietitians and Nutritionist', 'Optometrist', 'Mental Health Professional', 'Chiropractor', 'Midwives', 'Paramedics and Emergency Medical Technician (EMTs)', 'Physiotherapist', 'Health Informatics Professional', 'Medical Transcriptionist', 'Health Educators and Community Health Worker', 'Bio Medical Engineer', 'Facility Engineer', 'Research Professional', 'Non- Allopathy Practitioner', 'Others'];

    $titles = ['Mr', 'Ms', 'Dr', 'Mrs', 'Sr', 'Prof'];

    $educationalQualifications = ['Doctor of Medicine (MD)', 'Bachelor of Medicine (MBBS)', 'Bachelor of Surgery (MBBS)', 'Doctor of Osteopathic Medicine (DO)', 'Bachelor of Science in Nursing (BSN)', 'Master of Science in Nursing (MSN)', 'Doctor of Nursing Practice (DNP)', 'Doctor of Pharmacy (PharmD)', 'Doctor of Dental Surgery (DDS)', 'Doctor of Dental Medicine (DMD)', 'Doctor of Veterinary Medicine (DVM)', 'Doctor of Physical Therapy (DPT)', 'Bachelor of Pharmacy (BPharm)', 'Bachelor of Science in Medical Laboratory Science (MLS)', 'Bachelor of Science in Radiologic Technology (BSRT)', 'Bachelor of Science in Occupational Therapy (BSOT)', 'Bachelor of Medical Science (BMedSci)'];

    $personal_social = json_decode($membership->personal_social);

    $personal_address = json_decode($membership->personal_address);

@endphp


<!-- Edit Profile Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
        <h4 class="mb-4">Edit Profile</h4>
        <div class="edit-profile-btn">
            <a href="#profile-edit" class="default-btn-2 fancybox">Edit Profile</a>
        </div>
    </div>
    <div class="profiles-edits d-flex">
        <div class="edit-pic">
            @if($membership->hospital_logo)
              <img src="{{ $membership->hospital_logo }}">
             @else
              <img src="images/user-profile.png">
             @endif
        </div>
        <div class="profile-info ml-5">
            {{-- @dd($membership) --}}
            <ul class="d-flex justify-content-between flex-wrap">
                <li>
                    <label>First Name:</label>
                    <p>{{ $membership->first_name }}</p>
                </li>
                <li>
                    <label>Last Name:</label>
                    <p>{{ $membership->last_name }}</p>
                </li>
                <li>
                    <label>Email:</label>
                    <p>{{ $membership->email }}</p>
                </li>
                <li>
                    <label>Mobile No.:</label>
                    <p>{{ $membership->personal_mobile }}</p>
                </li>
                <li>
                    <label>Organization Name:</label>
                    <p>{{ $membership->organization_name }}</p>
                </li>
                <li>
                    <label>Your Designation:</label>
                    <p>{{ $membership->profession }}</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Ends Here -->


<!-- Popup Starts -->
<!-- Edit Profile Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="profile-edit">
    <div class="subscription-plan-sec">
        <h4 class="mb-4">Edit Profile</h4>
        <div class="edit-profile-form inner-sec">
            <form class="membership-form" method="POST" action="{{ route('update.profile.detail') }}">
                @csrf
                <input name="id" value="{{ $membership->id }}" hidden>
                <div class="inner-box mt-0" id="">
                    <ul class="full-form">
                        <li>
                            <div class="input-group">
                                <label>Select Profession*</label>
                                <Select class="" name="profession">
                                    @foreach ($professions as $profession)
                                        <option value="{{ $profession }}"
                                            {{ $membership->profession === $profession ? 'selected' : '' }}>
                                            {{ $profession }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Title</label>
                                <Select class="" name="title" required>
                                    @foreach ($titles as $title)
                                        <option value="{{ $title }}"
                                            {{ $membership->title === $title ? 'selected' : '' }}>{{ $title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" placeholder=""
                                    value="{{ $membership->first_name }}"
                                    class="@error('first_name') is-invalid @enderror" required readonly>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" placeholder=""
                                    value="{{ $membership->last_name }}"
                                    class="@error('last_name') is-invalid @enderror" required readonly>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Email ID </label>
                                <input type="text" name="email" placeholder="" value="{{ $membership->email }}"
                                    class="@error('email') is-invalid @enderror" required readonly>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Mobile No.</label>
                                <input type="text" name="personal_mobile" placeholder=""
                                    value="{{ $membership->personal_mobile }}"
                                    class="@error('personal_mobile') is-invalid @enderror" required>
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>Residential Address</label>
                                <input type="text" name="street_address" placeholder=""
                                    value="{{ $personal_address->street_address }}"
                                    class="@error('street_address') is-invalid @enderror" required>
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>Country</label>
                                <select name="country" class="country @error('country') is-invalid @enderror" required>
                                    <option>Please Select</option>
                                </select>
                                <!-- <input type="text" name="state" placeholder="" value="{{ old('state') }}" class="@error('state') is-invalid @enderror" required> -->
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>State</label>
                                <select name="state" class="State @error('state') is-invalid @enderror" required>
                                    <option>Please Select</option>
                                </select>
                                <!-- <input type="text" name="state" placeholder="" value="{{ old('state') }}" class="@error('state') is-invalid @enderror" required> -->
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>City</label>
                                <select name="city" class="State @error('city') is-invalid @enderror" required>
                                    <option>Please Select</option>
                                </select>
                                <!-- <input type="text" name="city" placeholder="" value="{{ old('city') }}" class="@error('city') is-invalid @enderror"> -->
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>Pin Code</label>
                                <input type="text" name="pin_code" placeholder=""
                                    value="{{ $personal_address->pin_code }}"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                    class="@error('pin_code') is-invalid @enderror" required>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>PAN No.</label>
                                <input type="text" name="pan_no" placeholder="" maxlength="10" minlength="10"
                                    value="{{ $membership->pan_no }}">
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Educational Qualification*</label>
                                <Select class="" name="educational_qualification">
                                    @foreach ($educationalQualifications as $educationalQualification)
                                        <option value="{{ $educationalQualification }}"
                                            {{ $membership->educational_qualification === $educationalQualification ? 'selected' : '' }}>
                                            {{ $educationalQualification }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Other Educational Qualification</label>
                                <input type="text" name='other_educational_qualification' placeholder=""
                                    value="{{ $membership->other_educational_qualification }}"
                                    class="@error('other_educational_qualification') is-invalid @enderror">
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Facebook Link</label>
                                <input type="text" placeholder=""
                                    value="{{ $personal_social->personal_facebook_link }}"
                                    class="@error('personal_facebook_link') is-invalid @enderror"
                                    name='personal_facebook_link'>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Twitter Link</label>
                                <input type="text" placeholder=""
                                    value="{{ $personal_social->personal_twitter_link }}"
                                    class="@error('personal_twitter_link') is-invalid @enderror"
                                    name='personal_twitter_link'>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>LinkedIn Link</label>
                                <input type="text" placeholder=""
                                    value="{{ $personal_social->personal_LinkedIn_link }}"
                                    class="@error('personal_LinkedIn_link') is-invalid @enderror"
                                    name='personal_LinkedIn_link'>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Instagram Link</label>
                                <input type="text" placeholder=""
                                    value="{{ $personal_social->personal_instagram_link }}"
                                    class="@error('personal_instagram_link') is-invalid @enderror"
                                    name='personal_instagram_link'>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="full-form">
                    <li class="text-right w-100">
                        <button type="submit" class="btn-submit">Save</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- End Here -->
