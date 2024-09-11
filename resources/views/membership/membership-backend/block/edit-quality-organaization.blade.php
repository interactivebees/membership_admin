<?php
$roles = ['CEO', 'CFO', 'COO', 'CTO', 'Managing Director', 'Chairman', 'Vice Chairman', 'Director', 'Quality Manager', 'Clinician', 'Medical Superintendent', 'Nursing Superintendent', 'Patient Safety Officer', 'Policy Maker', 'Healthcare Consultant', 'Patient Advocate', 'Nurse Practitioner', 'Risk Manager', 'Professor', 'Sustainability Excellence Professional', 'Lab Technician', 'Allied Health Professional', 'Non Healthcare Professional', 'Laboratory Professional', 'Others'];
$specializations = ['Family medicine', 'Internal Medicine', 'Pediatrician', 'Obstetricians/gynecologist (OBGYNs)', 'Cardiologist', 'Oncologist', 'Gastroenterologist', 'Pulmonologist', 'Infectious disease', 'Nephrologist', 'Endocrinologist', 'Ophthalmologist', 'Otolaryngologist', 'Dermatologist', 'Psychiatrist', 'Neurologist', 'Radiologist', 'Anesthesiologist', 'Surgeon', 'Physician executive', 'Urologist'];
?>
<!-- Edit Organaization Head Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
        <h4 class="mb-4">Organaization Detail</h4>
        <div class="edit-profile-btn">
            <a href="#edit-organaization-head" class="default-btn-2 fancybox">Edit Organaization Detail</a>
        </div>
    </div>
    <div class="profiles-edits d-flex">
        <div class="profile-info">
            <ul class="d-flex justify-content-between flex-wrap">
                <li>
                    <label>Name of the Organization</label>
                    <p id="organization_name">{{ $membership->organization_name }}</p>
                </li>
                <li>
                    <label>Designation</label>
                    <p id="personal_designation">{{ $membership->personal_designation }}</p>
                </li>
                <li>
                    <label>Role</label>
                    <p id="role">{{ $membership->role }}</p>
                </li>
                <li>
                    <label>Specialization</label>
                    <p id="specialization">{{ $membership->specialization }}</p>
                </li>

                <li>
                    <label>Working Organization</label>
                    <p id="working_organization">{{ $membership->working_organization }}</p>
                </li>
                <li>
                    <label>Are you working as a dedicated Quality Implementer?</label>
                    <p id="quality_implementer">{{ $membership->quality_implementer }}</p>
                </li>
                <li>
                    <label>Area of Interest (Write in 100 words)</label>
                    <p id="area_of_interest">{{ $membership->area_of_interest }}</p>
                </li>
                <li>
                    <label>Testimonial About CAHO (100 Words)</label>
                    <p id="testimonial">{{ $membership->testimonial }}</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--Ends Here-->

<!-- Edit about Organaization Head Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-organaization-head">
    <div class="subscription-plan-sec">
        <h4 class="mb-4">Edit Organaization Details</h4>
        <div class="edit-profile-form inner-sec">
            <form class="membership-form"method="POST" action="{{ route('update.personal.detail') }}">
                @csrf
                <input name="id" value="{{ $membership->id }}" hidden>
                <div class="inner-box mt-0" id="">
                    <ul class="full-form">
                        <li class="">
                            <div class="input-group">
                                <label>Name of the Organization</label>
                                <input type="text" name="organization_name" placeholder=""
                                    value="{{ $membership->organization_name }}"
                                    class="@error('organization_name') is-invalid @enderror" required>
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>Designation</label>
                                <input type="text" name="personal_designation" placeholder="" value="{{ $membership->personal_designation }}"
                                    class="@error('personal_designation') is-invalid @enderror" required>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Role *</label>
                                <Select class="" name="role">
                                    @foreach ($roles as $role)
                                        <option {{ $membership->role === $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Specialization</label>
                                <Select class="" name="specialization">
                                    @foreach ($specializations as $specialization)
                                        <option {{ $membership->specialization === $specialization ? 'selected' : '' }} value="{{ $specialization }}">{{ $specialization }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Working Organization</label>
                                <select name="working_organization">
                                    <option {{ $membership->working_organization === "Healthcare Institution" ? 'selected' : '' }} value="Healthcare Institution">Healthcare Institution</option>
                                    <option {{ $membership->working_organization === "Consulting Oraganization" ? 'selected' : '' }} value="Consulting Oraganization">Consulting Oraganization</option>
                                    <option {{ $membership->working_organization === "Independent Consultant" ? 'selected' : '' }} value="Independent Consultant">Independent Consultant</option>
                                    <option {{ $membership->working_organization === "Diagnostic Laboratory" ? 'selected' : '' }} value="Diagnostic Laboratory">Diagnostic Laboratory</option>
                                </select>
                            </div>
                        </li>
                        <li class="">
                            <div class="input-group">
                                <label>Are you working as a dedicated Quality Implementer?</label>
                                <select name="quality_implementer">
                                    <option {{ $membership->quality_implementer === "Yes" ? 'selected' : '' }} value="Healthcare Institution">Yes</option>
                                    <option {{ $membership->quality_implementer === "No" ? 'selected' : '' }} value="Consulting Oraganization">No</option>
                                </select>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Area of Interest (Write in 100 words) </label>
                                <input type="text" name="area_of_interest" placeholder=""
                                    value="{{ $membership->area_of_interest }}" class="@error('area_of_interest') is-invalid @enderror" required>
                            </div>
                        </li>

                        <li class="">
                            <div class="input-group">
                                <label>Testimonial About CAHO (100 Words)</label>
                                <input type="text" name="testimonial" placeholder=""
                                value="{{ $membership->testimonial }}" class="@error('testimonial') is-invalid @enderror" required>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="input-group">
                                <label>Upload Official Photo</label>
                                <input id="hospital_logo_input" type="file" name="official_photo"
                                    value="{{ old('official_photo') }}" accept="image/*">
                            </div>
                        </li> --}}
                    </ul>
                    <ul class="full-form">
                        <li class="text-right w-100">
                            <button type="submit" class="btn-submit">Save</button>
                        </li>
                    </ul>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Ends Here -->



