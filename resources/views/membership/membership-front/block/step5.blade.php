<div class="members-section" id="contact-person2">
    <div class="inner-box" id="">
        <h4 class="membership-heading">Contact Person Representing Orgnaization - 2</h4>
        <ul class="full-form">
            <li>
                <div class="input-group">
                    <label>Title*</label>
                    <select name="two_title" required>
                        <option value="">Select</option>
                        <option {{ old('two_title') === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                        <option {{ old('two_title') === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                        <option {{ old('two_title') === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                        <option {{ old('two_title') === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>First Name*</label>
                    <input type="text" name="two_first_name" value="{{ old('two_first_name') }}"
                        class="@error('two_first_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Last Name*</label>
                    <input type="text" name="two_last_name" value="{{ old('two_last_name') }}"
                        class="@error('two_last_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Designation*</label>
                    <input type="text" name="two_designation" value="{{ old('two_designation') }}"
                        class="@error('two_designation') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Mobile No.</label>
                    <input type="tel" name="two_mobile_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"
                        value="{{ old('two_mobile_no') }}"
                        class="@error('two_mobile_no') is-invalid @enderror dynamic-input">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Email*</label>
                    <input type="email" name="two_emailID" value="{{ old('two_emailID') }}"
                        class="@error('two_emailID') is-invalid @enderror" required>
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>WhatsApp Contact No.*</label>
                    <input type="tel" name="two_whatsApp_contact_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"
                        value="{{ old('two_whatsApp_contact_no') }}"
                        class="@error('two_whatsApp_contact_no') is-invalid @enderror dynamic-input" required>
                </div>
            </li>
        </ul>
    </div>

    <ul class="full-form">
        <li class="text-left">
            <button type="button" class="btn-submit" id="back-step-4">Back</button>
        </li>
        <li class="text-right">
            <button type="button" class="btn-submit" id="step5">Preview</button>
        </li>
    </ul>

    </ul>
</div>
