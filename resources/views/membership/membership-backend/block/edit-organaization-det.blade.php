@php
    $hospital_social = json_decode($hospital_social);
    $hospital_address = json_decode($hospital_address);
@endphp

<!-- Edit Organization Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">Organaization Details</h4>
       <div class="edit-profile-btn">
          <a href="#organization-det-edit" class="default-btn-2 fancybox">Edit Organaization Details</a>
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
          <ul class="d-flex justify-content-between flex-wrap">
             <li>
                <label>Name of the Organization:</label>
                <p>{{ $organization_name }}</p>
             </li>
             @if ($membership->form_type != 'diagnostic')
             <li>
                <label>No of Beds:</label>
                <p>{{ $numbers_of_beds_in_hospital }}</p>
             </li>
             @endif
             {{-- <li>
                <label>Hospital Logo:</label>
                <p>test.jpg</p>
             </li> --}}
             
             <li>
                <label>Pin Code:</label>
                <p>{{ $hospital_address->pin_code }}</p>
             </li>
             <li>
                <label>State:</label>
                <p id="state">{{ $hospital_address->state }}</p>
             </li>
             <li>
                <label>City:</label>
                <p id="city">{{ $hospital_address->city }}</p>
             </li>
             <li>
                <label>District:</label>
                <p id="district">{{ $hospital_address->district }}</p>
             </li>
             <li>
                <label>PAN No.:</label>
                <p id="pan_no">{{ $pan_no }}</p>
             </li>
             <li>
                <label>GST No.:</label>
                <p id="gst_registration_number">{{ $gst_registration_number }}</p>
             </li>
             
             <li>
                <label>Website URL:</label>
                <p id="hospital_website_link">{{ $hospital_social->hospital_website_link }}</p>
             </li>
             <li>
                <label>Facebook Link:</label>
                <p id="hospital_facebook_link">{{ $hospital_social->hospital_facebook_link }}</p>
             </li>
             <li>
                <label>Twitter Link:</label>
                <p id="hospital_twitter_link">{{ $hospital_social->hospital_twitter_link }}</p>
             </li>
             <li>
                <label>LinkedIn Link:</label>
                <p id="hospital_LinkedIn_link">{{ $hospital_social->hospital_linkedIn_link }}</p>
             </li>
             <li>
                <label>Instagram Link:</label>
                <p id="hospital_instagram_link">{{ $hospital_social->hospital_instagram_link }}</p>
             </li>
             <li>
                <label>Telephone No. (with STD Code) / Mobile:</label>
                <p id="hospital_mobile">{{ $hospital_mobile }}</p>
             </li>
             <li class="w-100">
                <label>Street Address:</label>
                <p>{{ $hospital_address->street_address }}</p>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit Organaization Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="organization-det-edit">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Organaization Details</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form" method="POST" action="{{ route('update.organization.detail') }}" onsubmit="validateForm(event)" enctype="multipart/form-data">
            @csrf
            <input name="id" value="{{ $membership->id }}" hidden>
             <div class="inner-box mt-0" id="">
                <ul class="full-form">
                   <li>
                      <div class="input-group">
                         <label>Name of the Organization*</label>
                         <input type="text" name="organization_name" placeholder="" oninput="validateInput(event)" value="{{ $organization_name }}" class="@error('organization_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Upload Logo</label>
                         <input id="hospital_logo_input" type="file" name="hospital_logo" value="{{ old('hospital_logo') }}" accept="image/*">
                      </div>
                   </li>
                   @if ($membership->form_type != 'diagnostic')
                   <li>
                      <div class="input-group">
                         <label>No of Beds</label>
                         <input name="numbers_of_beds_in_hospital" type="text" placeholder="" value="{{ $numbers_of_beds_in_hospital }}"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                            class="@error('numbers_of_beds_in_hospital') is-invalid @enderror" required>
                      </div>
                   </li>
                   @endif
                   <li class="">
                      <div class="input-group">
                         <label>Street Address</label>
                         <input type="text" name="street_address" placeholder="" value="{{ $hospital_address->street_address }}"
                            class="@error('street_address') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li class="">
                      <div class="input-group">
                         <label>Pin Code</label>
                         <input type="text" name="pin_code" maxlength="6" placeholder="" value="{{ $hospital_address->pin_code }}"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                            class="@error('pin_code') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li class="">
                      <div class="input-group">
                         <label>State</label>
                         <input type="text" name="state" placeholder="" oninput="validateInput(event)" value="{{ $hospital_address->state }}"
                            class="@error('state') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li class="">
                      <div class="input-group">
                         <label>City</label>
                         <input type="text" name="city" oninput="validateInput(event)" placeholder="" value="{{ $hospital_address->city }}"
                            class="@error('city') is-invalid @enderror">
                      </div>
                   </li>
                   <li class="">
                      <div class="input-group">
                         <label>District</label>
                         <input type="text" name="district" oninput="validateInput(event)" placeholder="" value="{{ $hospital_address->district }}"
                            class="@error('district') is-invalid @enderror">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>PAN No.</label>
                         <input type="text" name="pan_no" placeholder="" oninput="noSpecialCharacters(event)" maxlength="10" minlength="10" value="{{ $pan_no }}">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>GST No.</label>
                         <input type="text" name="gst_registration_number" oninput="noSpecialCharacters(event)" placeholder="" maxlength="15" minlength="15"
                            id="gst_registration_number" value="{{ $gst_registration_number }}">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Telephone No. (with STD Code) / Mobile</label>
                         <input type="text" placeholder="" name="hospital_mobile" value="{{ $hospital_mobile }}"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="11"
                            class="@error('hospital_mobile') is-invalid @enderror">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Website URL</label>
                         <input type="text" placeholder="" value="{{ $hospital_social->hospital_website_link }}"
                            class="@error('hospital_website_link') is-invalid @enderror" name='hospital_website_link'>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Facebook Link</label>
                         <input type="text" placeholder="" value="{{ $hospital_social->hospital_facebook_link }}"
                            class="@error('hospital_facebook_link') is-invalid @enderror" name='hospital_facebook_link'>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Twitter Link</label>
                         <input type="text" placeholder="" value="{{ $hospital_social->hospital_twitter_link }}"
                            class="@error('hospital_twitter_link') is-invalid @enderror" name='hospital_twitter_link'>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>LinkedIn Link</label>
                         <input type="text" placeholder="" value="{{ $hospital_social->hospital_linkedIn_link }}"
                            class="@error('hospital_linkedIn_link') is-invalid @enderror" name='hospital_linkedIn_link'>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Instagram Link</label>
                         <input type="text" placeholder="" value="{{ $hospital_social->hospital_instagram_link }}"
                            class="@error('hospital_instagram_link') is-invalid @enderror" name='hospital_instagram_link'>
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
 <!-- Ends Here -->
