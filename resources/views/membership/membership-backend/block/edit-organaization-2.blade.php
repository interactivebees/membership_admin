@php
    $contact_person_representing_organization_two = json_decode($contact_person_representing_organization_two);
@endphp

<!-- Edit Contact Organaization 2 Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">Contact Person Representing Organaization - 2</h4>
       <div class="edit-profile-btn">
          <a href="#edit-organaization-head-contact-2" class="default-btn-2 fancybox">Edit</a>
       </div>
    </div>
    <div class="profiles-edits d-flex">
       <div class="profile-info">
          <ul class="d-flex justify-content-between flex-wrap">
             <li>
                <label>Title</label>
                <p id="two_title">{{ $contact_person_representing_organization_two->two_title }}</p>
             </li>
             <li>
                <label>First Name</label>
                <p id="two_first_name">{{ $contact_person_representing_organization_two->two_first_name }}</p>
             </li>
             <li>
                <label>Last Name</label>
                <p id="two_last_name">{{ $contact_person_representing_organization_two->two_last_name }}</p>
             </li>
             <li>
                <label>Designation</label>
                <p id="two_designation">{{ $contact_person_representing_organization_two->two_designation }}</p>
             </li>
             <li>
                <label>Mobile No.</label>
                <p id="two_mobile_no">{{ $contact_person_representing_organization_two->two_mobile_no }}</p>
             </li>
             <li>
                <label>Email</label>
                <p id="two_emailID">{{ $contact_person_representing_organization_two->two_emailID }}</p>
             </li>
             <li>
                <label>WhatsApp Contact No.</label>
                <p id="two_whatsApp_contact_no">{{ $contact_person_representing_organization_two->two_whatsApp_contact_no }}</p>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit about Organaization Head organaization person 1 Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-organaization-head-contact-2">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Contact Person Representing Organaization - 2</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form" method="POST" action="{{ route('update.organization.two.detail') }}">
            @csrf
            <input name="id" value="{{ $membership->id }}" hidden>
             <div class="inner-box mt-0" id="">
                <ul class="full-form">
                   <li>
                      <div class="input-group">
                         <label>Title</label>
                         <select name="two_title" required>
                            <option value="{{ old('two_title') }}">Select</option>
                            <option {{ $contact_person_representing_organization_two->two_title === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                            <option {{ $contact_person_representing_organization_two->two_title === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                            <option {{ $contact_person_representing_organization_two->two_title === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                            <option {{ $contact_person_representing_organization_two->two_title === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                         </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>First Name</label>
                         <input type="text" name="two_first_name" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_two->two_first_name }}" class="@error('two_first_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Last Name</label>
                         <input type="text" name="two_last_name" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_two->two_last_name }}" class="@error('two_last_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Designation</label>
                         <input type="text" name="two_designation" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_two->two_designation }}" class="@error('two_designation') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Mobile No.</label>
                         <input type="text" name="two_mobile_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $contact_person_representing_organization_two->two_mobile_no }}" class="@error('two_mobile_no') is-invalid @enderror">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Email</label>
                         <input type="email" name="two_emailID" value="{{ $contact_person_representing_organization_two->two_emailID }}" class="@error('two_emailID') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>WhatsApp Contact No.</label>
                         <input type="text" name="two_whatsApp_contact_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $contact_person_representing_organization_two->two_whatsApp_contact_no }}" class="@error('two_whatsApp_contact_no') is-invalid @enderror" required>
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
