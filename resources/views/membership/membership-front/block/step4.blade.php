<div class="members-section" id="contact-person1">
    <div class="inner-box" id="">
        <h4 class="membership-heading">Contact Person Representing Orgnaization - 1</h4>
        <ul class="full-form">
            <li>
                <div class="input-group">
                    <label>Title*</label>
                    <select name="one_title" required>
                        <option value="">Select</option>
                        <option {{ old('one_title') === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                        <option {{ old('one_title') === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                        <option {{ old('one_title') === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                        <option {{ old('one_title') === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>First Name*</label>
                    <input type="text" name="one_first_name" value="{{ old('one_first_name') }}"
                        class="@error('one_first_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Last Name*</label>
                    <input type="text" name="one_last_name" value="{{ old('one_last_name') }}"
                        class="@error('one_last_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Designation*</label>
                    <input type="text" name="one_designation" value="{{ old('one_designation') }}"
                        class="@error('one_designation') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Mobile No.</label>
                    <input type="tel" name="one_mobile_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"
                        value="{{ old('one_mobile_no') }}"
                        class="@error('one_mobile_no') is-invalid @enderror dynamic-input">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Email*</label>
                    <input type="email" name="one_emailID" value="{{ old('one_emailID') }}"
                        class="@error('one_emailID') is-invalid @enderror" required>
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>WhatsApp Contact No.*</label>
                    <input type="tel" name="one_whatsApp_contact_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"
                        value="{{ old('one_whatsApp_contact_no') }}"
                        class="@error('one_whatsApp_contact_no') is-invalid @enderror dynamic-input" required>
                </div>
            </li>
        </ul>
    </div>
    <ul class="full-form">
        <li class="text-left">
            <button type="button" class="btn-submit" id="back-step-3">Back</button>
        </li>
        <li class="text-right">
            <button type="button" class="btn-submit" id="step4">Continue</button>
        </li>
    </ul>

    </ul>
</div>
