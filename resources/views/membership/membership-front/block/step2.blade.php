<div class="members-section" id="about-healthcare">
    <div class="inner-box">
        <h4 class="membership-heading">About Healthcare Institution </h4>
        <ul class="full-form">
            <li>
                <div class="input-group">
                    <label>Accreditation Category* </label>
                    <select name="accreditation_category" required>
                        <option value="">Select</option>
                        <option {{ old('accreditation_category') === "Full Accreditation HCO" ? 'selected' : '' }} value="Full Accreditation HCO">Full Accreditation HCO</option>
                        <option {{ old('accreditation_category') === "SHCO" ? 'selected' : '' }} value="SHCO">SHCO</option>
                        <option {{ old('accreditation_category') === "Entry Level Hospital" ? 'selected' : '' }} value="Entry Level Hospital">Entry Level Hospital</option>
                        <option {{ old('accreditation_category') === "Eye Care Organization" ? 'selected' : '' }} value="Eye Care Organization">Eye Care Organization</option>
                        <option {{ old('accreditation_category') === "AYUSH Hospital" ? 'selected' : '' }} value="AYUSH Hospital">AYUSH Hospital</option>
                        <option {{ old('accreditation_category') === "Dental Healthcare Organization" ? 'selected' : '' }} value="Dental Healthcare Organization">Dental Healthcare Organization</option>
                        <option {{ old('accreditation_category') === "Wellness Centre" ? 'selected' : '' }} value="Wellness Centre">Wellness Centre</option>
                        <option {{ old('accreditation_category') === "Allopathic Clinic" ? 'selected' : '' }} value="Allopathic Clinic">Allopathic Clinic</option>
                        <option {{ old('accreditation_category') === "Panchkarma Clinic" ? 'selected' : '' }} value="Panchkarma Clinic">Panchkarma Clinic</option>
                        <option {{ old('accreditation_category') === "PHC (Primary Health Care)" ? 'selected' : '' }} value="PHC (Primary Health Care)">PHC (Primary Health Care)</option>
                        <option {{ old('accreditation_category') === "Other Stand-alone Clinic" ? 'selected' : '' }} value="Other Stand-alone Clinic">Other Stand-alone Clinic</option>
                        <option {{ old('accreditation_category') === "Blood Bank / Centre" ? 'selected' : '' }} value="Blood Bank / Centre">Blood Bank / Centre</option>
                        <option {{ old('accreditation_category') === "Medical College" ? 'selected' : '' }} value="Medical College">Medical College</option>
                        <option {{ old('accreditation_category') === "Dental College" ? 'selected' : '' }} value="Dental College">Dental College</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Classification* </label>
                    <select name="tier_classification" required>
                        <option value="">Select</option>
                        <option {{ old('tier_classification') === "Tier 1 Hospital" ? 'selected' : '' }} value="Tier 1 Hospital">Tier 1 Hospital</option>
                        <option {{ old('tier_classification') === "Tier 2 Hospital" ? 'selected' : '' }} value="Tier 2 Hospital">Tier 2 Hospital</option>
                        <option {{ old('tier_classification') === "Tier 3 Hospital" ? 'selected' : '' }} value="Tier 3 Hospital">Tier 3 Hospital</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Hospital Location*</label>
                    <select name="hospital_location" required>
                        <option value="" >Select</option>
                        <option {{ old('hospital_location') === "Urban" ? 'selected' : '' }} value="Urban">Urban</option>
                        <option {{ old('hospital_location') === "Rural" ? 'selected' : '' }} value="Rural">Rural</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Diagnostic Centre* </label>
                    <select name="diagnostic_centre" required>
                        <option value="" >Select</option>
                        <option {{ old('diagnostic_centre') === "Hospital Own Lab" ? 'selected' : '' }} value="Hospital Own Lab">Hospital Own Lab</option>
                        <option {{ old('diagnostic_centre') === "Outsourced" ? 'selected' : '' }} value="Outsourced">Outsourced</option>
                    </select>
                </div>
            </li>

            <li class="full step-checkbox">
                <div class="input-group d-block">
                    <label>Support Services of Hospital</label>
                    <div class="multiple-checkbox">
                        <div class="check-multi">
                            <input type="checkbox" name="support_services_hospital[]" value="Professions allied to medicine"> Professions allied to medicine
                        </div>
                        <div class="check-multi">
                            <input type="checkbox" name="support_services_hospital[]" value="Dietetics">Dietetics
                        </div>
                        <div class="check-multi">
                            <input type="checkbox" name="support_services_hospital[]" value="Rehabilitation"> Rehabilitation
                        </div>
                        <div class="check-multi">
                            <input type="checkbox" name="support_services_hospital[]" value="CSSD"> CSSD
                        </div>
                        {{-- <div class="check-multi">
                            <input type="checkbox"> Pharmacy Services
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Laboratory
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Biomedical Engineering
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Maintenance Services
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Housekeeping
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Laundry
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Information Technology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Medical Records
                        </div>
                        <div class="check-multi">
                            <input type="checkbox">Other
                        </div> --}}

                    </div>
                </div>
            </li>
            <li class="full step-checkbox">
                <div class="input-group d-block">
                    <label>Core Services</label>
                    <div class="multiple-checkbox">
                        <div class="check-multi">
                            <input type="checkbox" name="core_services_hospital[]" value="Anaesthesiology"> Anaesthesiology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox" name="core_services_hospital[]" value="Dermatology and Venereology">Dermatology and Venereology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox" name="core_services_hospital[]" value="Dental"> Dental
                        </div>
                        {{-- <div class="check-multi">
                            <input type="checkbox"> General Medicine
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Geriatrics
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> General Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Laboratory
                        </div>

                        <div class="check-multi">
                            <input type="checkbox"> Obstetrics and Gynaecology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Ophthalmology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Orthopaedic Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Otorhinolaryngology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Paediatrics
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Radiation Oncology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Radiology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Respiratory Medicine
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Accident and Emergency Medicine
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Psychiatry
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Physical Medicine and Rehabilitation
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Cardiology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Cardiothoracic Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Clinical Haematology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Endocrinology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Hepatology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Hepato-Pancreato-Biliary Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Immunology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Medical Gastroenterology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Neonatology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Nephrology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Neurology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Neurosurgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Oncology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Oncology Surgeries
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Paediatric Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Plastic and Reconstructive Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Rheumatology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Urology
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Vascular Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Endocrine Surgery
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Reproductive Medicine
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Palliative care
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Nuclear Medicine (Diagnostic and Therapeutic)
                        </div>
                        <div class="check-multi">
                            <input type="checkbox"> Other
                        </div> --}}
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <ul class="full-form">
        <li class="text-left">
            <button type="button" class="btn-submit back-btn" id="back-step-1">Back</button>
        </li>
        <li class="text-right">
            <button type="button" class="btn-submit" id="step2">Continue</button>
        </li>
    </ul>
</div>
