@php
    $organization_head = json_decode($organization_head);
@endphp
{{-- @dd($organization_head) --}}
<!-- Edit Organaization Head Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">Organaization Head</h4>
       <div class="edit-profile-btn">
          <a href="#edit-organaization-head" class="default-btn-2 fancybox">Edit Organaization Head</a>
       </div>
    </div>
    <div class="profiles-edits d-flex">
       <div class="profile-info">
          <ul class="d-flex justify-content-between flex-wrap">
             <li>
                <label>Title</label>
                <p id="oh_title">{{ $organization_head->oh_title }}</p>
             </li>
             <li>
                <label>First Name</label>
                <p id="oh_first_name">{{ $organization_head->oh_first_name }}</p>
             </li>
             <li>
                <label>Last Name</label>
                <p id="oh_last_name">{{ $organization_head->oh_last_name }}</p>
             </li>
             <li>
                <label>Designation</label>
                <p id="oh_designation">{{ $organization_head->oh_designation }}</p>
             </li>
             <li>
                <label>Mobile No.</label>
                <p id="oh_mobile_no">{{ $organization_head->oh_mobile_no }}</p>
             </li>
             <li>
                <label>Email</label>
                <p id="oh_emailID">{{ $organization_head->oh_emailID }}</p>
             </li>
             <li>
                <label>WhatsApp Contact No.</label>
                <p id="oh_whatsApp_contact_no">{{ $organization_head->oh_whatsApp_contact_no }}</p>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit about Organaization Head Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-organaization-head">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Organaization Head</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form" method="POST" action="{{ route('update.organization.head.detail') }}">
            @csrf
            <input name="id" value="{{ $membership->id }}" hidden>
             <div class="inner-box mt-0" id="">
                <ul class="full-form">
                   <li>
                      <div class="input-group">
                         <label>Title</label>
                         <select name="oh_title" value="{{ old('oh_title') }}" required>
                            <option value="">Select</option>
                            <option {{ $organization_head->oh_title === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                            <option {{ $organization_head->oh_title === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                            <option {{ $organization_head->oh_title === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                            <option {{ $organization_head->oh_title === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                         </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>First Name</label>
                         <input type="text" name="oh_first_name" oninput="validateInput(event)" value="{{ $organization_head->oh_first_name }}" class="@error('oh_first_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Last Name</label>
                         <input type="text" name="oh_last_name" oninput="validateInput(event)" value="{{ $organization_head->oh_last_name }}" class="@error('oh_last_name') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Designation</label>
                         <input type="text" name="oh_designation" oninput="validateInput(event)" value="{{ $organization_head->oh_designation }}" class="@error('oh_designation') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Mobile No.</label>
                         <input type="text" name="oh_mobile_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $organization_head->oh_mobile_no }}" class="@error('oh_mobile_no') is-invalid @enderror">
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>Email</label>
                         <input type="email" name="oh_emailID" value="{{ $organization_head->oh_emailID }}" class="@error('oh_emailID') is-invalid @enderror" required>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                         <label>WhatsApp Contact No.</label>
                         <input type="text" name="oh_whatsApp_contact_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" value="{{ $organization_head->oh_whatsApp_contact_no }}" class="@error('oh_whatsApp_contact_no') is-invalid @enderror" required>
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
