<?php 
$roles = [
    'CEO',
    'CFO',
    'COO',
    'CTO',
    'Managing Director',
    'Chairman',
    'Vice Chairman',
    'Director',
    'Quality Manager',
    'Clinician',
    'Medical Superintendent',
    'Nursing Superintendent',
    'Patient Safety Officer',
    'Policy Maker',
    'Healthcare Consultant',
    'Patient Advocate',
    'Nurse Practitioner',
    'Risk Manager',
    'Professor',
    'Sustainability Excellence Professional',
    'Lab Technician',
    'Allied Health Professional',
    'Non Healthcare Professional',
    'Laboratory Professional',
    'Others',
];
$specializations = [
    'Family medicine',
    'Internal Medicine',
    'Pediatrician',
    'Obstetricians/gynecologist (OBGYNs)',
    'Cardiologist',
    'Oncologist',
    'Gastroenterologist',
    'Pulmonologist',
    'Infectious disease',
    'Nephrologist',
    'Endocrinologist',
    'Ophthalmologist',
    'Otolaryngologist',
    'Dermatologist',
    'Psychiatrist',
    'Neurologist',
    'Radiologist',
    'Anesthesiologist',
    'Surgeon',
    'Physician executive',
    'Urologist',
];
?>
<!-- Edit Organaization Head Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">Personal Detail</h4>
       <div class="edit-profile-btn">
          <a href="#edit-organaization-head" class="default-btn-2 fancybox">Edit Personal Detail</a>
       </div>
    </div>
    <div class="profiles-edits d-flex">
       <div class="profile-info">
          <ul class="d-flex justify-content-between flex-wrap">
            <li>
                <label>Select Professional*</label>
                <p id="oh_title">Doctor</p>
             </li>
             <li>
                <label>Title</label>
                <p id="oh_title">Mr.</p>
             </li>
             <li>
                <label>First Name</label>
                <p id="oh_first_name">Test1</p>
             </li>
             <li>
                <label>Last Name</label>
                <p id="oh_last_name">gdefh</p>
             </li>
             <li>
                <label>Email ID</label>
                <p id="oh_designation">Developer</p>
             </li>
             <li>
                <label>Residential Address</label>
                <p id="oh_mobile_no">98846465520</p>
             </li>
             <li>
                <label>State</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>City</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Pin Code</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>PAN No.</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Educational Qualification*</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Other Educational Qualification</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Facebook Link</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Twitter Link</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>LinkedIn Link</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>Instagram Link</label>
                <p id="oh_emailID">test@gmail.com</p>
             </li>
             <li>
                <label>WhatsApp Contact No.</label>
                <p id="oh_whatsApp_contact_no">659979456520</p>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit about Organaization Head Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-organaization-head">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Personal Details</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form">
             <div class="inner-box mt-0" id="">
            <ul class="full-form">
                <li>
                    <div class="input-group">
                        <label>Select Professional*</label>
                        <Select class="">
                            <option>Doctor </option>
                            <option>Nurse</option>
                            <option>Physician Assistant</option>
                            <option>Paramedic</option>
                            <option>Administrator</option>
                            <option>Therapist</option>
                            <option>Medical Technologist and Technician</option>
                            <option>Surgeon</option>
                            <option>Dentist</option>
                            <option>Dietitians and Nutritionist</option>
                            <option>Optometrist</option>
                            <option>Mental Health Professional</option>
                            <option>Chiropractor</option>
                            <option>Midwives</option>
                            <option>Paramedics and Emergency Medical Technician (EMTs)</option>
                            <option>Physiotherapist</option>
                            <option>Health Informatics Professional</option>
                            <option>Medical Transcriptionist</option>
                            <option>Health Educators and Community Health Worker</option>
                            <option>Bio Medical Engineer</option>
                            <option>Facility Engineer</option>
                            <option>Research Professional</option>
                            <option>Non- Allopathy Practitioner</option>
                            <option>Others</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Title</label>
                        <Select class="">
                            <option>Mr </option>
                            <option>Ms</option>
                            <option>Dr</option>
                            <option>Mrs</option>
                            <option>Sr</option>
                            <option>Prof</option>
                        </select>
                    </div>
                </li>
                <li class="">
                    <div class="input-group">
                        <label>First Name</label>
                        <input type="text" name="First_Name" placeholder="" value="{{ old('First_Name') }}"
                            class="@error('First_Name') is-invalid @enderror" required>
                    </div>
                </li>

                <li class="">
                    <div class="input-group">
                        <label>Last Name</label>
                        <input type="text" name="Last_Name" placeholder="" value="{{ old('Last_Name') }}"
                            class="@error('Last_Name') is-invalid @enderror" required>
                    </div>
                </li>

                <li class="">
                    <div class="input-group">
                        <label>Email ID </label>
                        <input type="text" name="Email_ID" placeholder="" value="{{ old('Email_ID') }}"
                            class="@error('Email_ID') is-invalid @enderror" required>
                    </div>
                </li>

                <li class="">
                    <div class="input-group">
                        <label>WhatsApp Mobile No.</label>
                        <input type="text" name="WhatsApp_Mobile" placeholder="" value="{{ old('WhatsApp_Mobile') }}"
                            class="@error('WhatsApp_Mobile') is-invalid @enderror">
                    </div>
                </li>
                <li class="">
                    <div class="input-group">
                        <label>Residential Address</label>
                        <input type="text" name="street_address" placeholder="" value="{{ old('street_address') }}"
                            class="@error('street_address') is-invalid @enderror" required>
                    </div>
                </li>
                <li class="">
                    <div class="input-group">
                        <label>State</label>
                        <input type="text" name="state" placeholder="" value="{{ old('state') }}"
                            class="@error('state') is-invalid @enderror" required>
                    </div>
                </li>
                <li class="">
                    <div class="input-group">
                        <label>City</label>
                        <input type="text" name="city" placeholder="" value="{{ old('city') }}"
                            class="@error('city') is-invalid @enderror">
                    </div>
                </li>
                <li class="">
                    <div class="input-group">
                        <label>Pin Code</label>
                        <input type="text" name="pin_code" placeholder="" value="{{ old('pin_code') }}"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                            class="@error('pin_code') is-invalid @enderror" required>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>PAN No.</label>
                        <input type="text" name="pan_no" placeholder="" maxlength="10" minlength="10" value="">
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Educational Qualification*</label>
                        <Select class="">
                            <option>Doctor of Medicine (MD) </option>
                            <option>Bachelor of Medicine (MBBS)</option>
                            <option>Bachelor of Surgery (MBBS)</option>
                            <option>Doctor of Osteopathic Medicine (DO) </option>
                            <option>Bachelor of Science in Nursing (BSN)</option>
                            <option>Master of Science in Nursing (MSN)</option>
                            <option>Doctor of Nursing Practice (DNP)</option>
                            <option>Doctor of Pharmacy (PharmD)</option>
                            <option>Doctor of Dental Surgery (DDS)</option>
                            <option>Doctor of Dental Medicine (DMD)</option>
                            <option>Doctor of Veterinary Medicine (DVM)</option>
                            <option>Doctor of Physical Therapy (DPT)</option>
                            <option>Bachelor of Pharmacy (BPharm)</option>
                            <option>Bachelor of Science in Medical Laboratory Science (MLS)</option>
                            <option>Bachelor of Science in Radiologic Technology (BSRT)</option>
                            <option>Bachelor of Science in Occupational Therapy (BSOT)</option>
                            <option>Bachelor of Medical Science (BMedSci)</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Other Educational Qualification</label>
                        <input type="text" placeholder="" value="{{ old('Other_Educational_Qualification') }}"
                            class="@error('Other_Educational_Qualification') is-invalid @enderror" name='Other_Educational_Qualification'>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Facebook Link</label>
                        <input type="text" placeholder="" value="{{ old('hospital_facebook_link') }}"
                            class="@error('hospital_facebook_link') is-invalid @enderror" name='hospital_facebook_link'>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Twitter Link</label>
                        <input type="text" placeholder="" value="{{ old('hospital_twitter_link') }}"
                            class="@error('hospital_twitter_link') is-invalid @enderror" name='hospital_twitter_link'>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>LinkedIn Link</label>
                        <input type="text" placeholder="" value="{{ old('hospital_LinkedIn_link') }}"
                            class="@error('hospital_LinkedIn_link') is-invalid @enderror" name='hospital_LinkedIn_link'>
                    </div>
                </li>
                <li>
                    <div class="input-group">
                        <label>Instagram Link</label>
                        <input type="text" placeholder="" value="{{ old('hospital_instagram_link') }}"
                            class="@error('hospital_instagram_link') is-invalid @enderror" name='hospital_instagram_link'>
                    </div>
                </li>
            </ul>
             </div> 
          </form>
          <ul class="full-form">
             <li class="text-right w-100">
                <button type="button" class="btn-submit">Save</button>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!-- Ends Here -->