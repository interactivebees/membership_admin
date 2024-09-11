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

<div class="members-section" id="quality-organization-detail">
    <div class="inner-box">
        <h4 class="membership-heading">Working Organaization Details</h4>
        <ul class="full-form">
            <li class="">
                <div class="input-group">
                    <label>Name of the Organization</label>
                    <input type="text" name="organization_name" placeholder="" value="{{ old('organization_name') }}" class="@error('organization_name') is-invalid @enderror" required>
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>Designation</label>
                    <input type="text" name="personal_designation" placeholder="" value="{{ old('personal_designation') }}" class="@error('personal_designation') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Role *</label>
                    <Select class="" name="role" required>
                        @foreach($roles as $role)
                        <option value="{{ $role }}" {{ old('role') === $role ? 'selected' : '' }}>{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Specialization</label>
                    <Select class="" name="specialization" required>
                        @foreach($specializations as $specialization)
                            <option value="{{ $specialization }}" {{ old('specialization') === $specialization ? 'selected' : '' }}>{{ $specialization }}</option>
                        @endforeach
                    </select>
                </div>
            </li>
            
            <li class="">
                <div class="input-group">
                    <label>Working Organization</label>
                    <select required name="working_organization">
                        <option value="Healthcare Institution">Healthcare Institution</option>
                        <option value="Consulting Oraganization">Consulting Oraganization</option>
                        <option value="Independent Consultant">Independent Consultant</option>
                        <option value="Diagnostic Laboratory">Diagnostic Laboratory</option>
                    </select>
                </div>
            </li>
            <li class="">
                <div class="input-group">
                    <label>Are you working as a dedicated Quality Implementer?</label>
                    <select name="quality_implementer" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </li>
             <li class="w-100">
                <div class="input-group">
                    <label>Upload Official Photo</label>
                    <input id="hospital_logo_input" type="file" name="official_photo" value="{{ old('official_photo') }}" accept="image/*">
                </div>
            </li>
            <li class="textarea-input">
                <div class="input-group">
                    <label>Area of Interest (Write in 100 words) </label>
                    <textarea name="area_of_interest" placeholder="" value="{{ old('area_of_interest') }}" data-type="textarea"
                        class="@error('area_of_interest') is-invalid @enderror" required></textarea>
                </div>
            </li>
            <li class="textarea-input">
                <div class="input-group">
                    <label>Testimonial About CAHO (100 Words)</label>
                    <textarea name="testimonial" placeholder="" value="{{ old('testimonial') }}" data-type="textarea"
                        class="@error('testimonial') is-invalid @enderror" required></textarea>
                </div>
            </li>
           
        </ul>
    </div>
    <ul class="full-form">
        <li class="text-left">
            <button type="button" class="btn-submit back-btn" id="back-step-1">Back</button>
        </li>

        <li class="text-right">
            <button type="button" class="btn-submit" id="step-final">Continue</button>
        </li>
    </ul>
</div>
