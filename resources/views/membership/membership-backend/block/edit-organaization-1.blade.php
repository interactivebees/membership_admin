@php
    $contact_person_representing_organization_one = json_decode($contact_person_representing_organization_one);
@endphp
<!-- Edit Contact Organaization 1 Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">Contact Person Representing Organaization - 1</h4>
       <div class="edit-profile-btn">
          <a href="#edit-organaization-head-contact-1" class="default-btn-2 fancybox">Edit</a>
       </div>
    </div>
    <div class="profiles-edits d-flex">
       <div class="profile-info">
          <ul class="d-flex justify-content-between flex-wrap">
             <li>
                <label>Title</label>
                <p id="one_title">{{ $contact_person_representing_organization_one->one_title }}</p>
             </li>
             <li>
                <label>First Name</label>
                <p id="one_first_name">{{ $contact_person_representing_organization_one->one_first_name }}</p>
             </li>
             <li>
                <label>Last Name</label>
                <p id="one_last_name">{{ $contact_person_representing_organization_one->one_last_name }}</p>
             </li>
             <li>
                <label>Designation</label>
                <p id="one_designation">{{ $contact_person_representing_organization_one->one_designation }}</p>
             </li>
             <li>
                <label>Mobile No.</label>
                <p id="one_mobile_no">{{ $contact_person_representing_organization_one->one_mobile_no }}</p>
             </li>
             <li>
                <label>Email</label>
                <p id="one_emailID">{{ $contact_person_representing_organization_one->one_emailID }}</p>
             </li>
             <li>
                <label>WhatsApp Contact No.</label>
                <p id="one_whatsApp_contact_no">{{ $contact_person_representing_organization_one->one_whatsApp_contact_no }}</p>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit about Organaization Head organaization person 1 Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-organaization-head-contact-1">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Contact Person Representing Organaization - 1</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form" method="POST" action="{{ route('update.organization.one.detail') }}">
            @csrf
          <input name="id" value="{{ $membership->id }}" hidden>
             <div class="inner-box mt-0" id="">
                <ul class="full-form">
                   <li>
                      <div class="input-group">
                         <label>Title</label>
                         <select name="one_title" required>
                            <option value="{{ old('one_title') }}">Select</option>
                            <option {{ $contact_person_representing_organization_one->one_title === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                            <option {{ $contact_person_representing_organization_one->one_title === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                            <option {{ $contact_person_representing_organization_one->one_title === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                            <option {{ $contact_person_representing_organization_one->one_title === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                         </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>First Name</label>
                         <input type="text" name="one_first_name" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_one->one_first_name }}" class="@error('one_first_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Last Name</label>
                         <input type="text" name="one_last_name" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_one->one_last_name }}" class="@error('one_last_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Designation</label>
                         <input type="text" name="one_designation" oninput="validateInput(event)" value="{{ $contact_person_representing_organization_one->one_designation }}" class="@error('one_designation') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Mobile No.</label>
                         <input type="text" name="one_mobile_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $contact_person_representing_organization_one->one_mobile_no }}" class="@error('one_mobile_no') is-invalid @enderror">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Email</label>
                         <input type="email" name="one_emailID" value="{{ $contact_person_representing_organization_one->one_emailID }}" class="@error('one_emailID') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>WhatsApp Contact No.</label>
                         <input type="text" name="one_whatsApp_contact_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $contact_person_representing_organization_one->one_whatsApp_contact_no }}" class="@error('one_whatsApp_contact_no') is-invalid @enderror" required>
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
