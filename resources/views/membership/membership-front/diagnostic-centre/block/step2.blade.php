<div class="members-section" id="organization-head">
    <div class="inner-box" id="">
        <h4 class="membership-heading">Diagnostic Centre Head</h4>
        <ul class="full-form">
            <li>
                <div class="input-group">
                    <label>Title</label>
                    <select name="oh_title" required>
                        <option value="">Select</option>
                        <option {{ old('oh_title') === "mr" ? 'selected' : '' }} value="mr">Mr.</option>
                        <option {{ old('oh_title') === "ms" ? 'selected' : '' }} value="ms">Ms.</option>
                        <option {{ old('oh_title') === "mrs" ? 'selected' : '' }} value="mrs">Mrs.</option>
                        <option {{ old('oh_title') === "dr" ? 'selected' : '' }} value="dr">Dr.</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="oh_first_name" value="{{ old('oh_first_name') }}"
                        class="@error('oh_first_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="oh_last_name" value="{{ old('oh_last_name') }}"
                        class="@error('oh_last_name') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Designation</label>
                    <input type="text" name="oh_designation" value="{{ old('oh_designation') }}"
                        class="@error('oh_designation') is-invalid @enderror" required>
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Mobile No.</label>
                    <input type="text" name="oh_mobile_no"
                        value="{{ old('oh_mobile_no') }}"
                        class="@error('oh_mobile_no') is-invalid @enderror">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="oh_emailID" value="{{ old('oh_emailID') }}"
                        class="@error('oh_emailID') is-invalid @enderror" required>
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>WhatsApp Contact No.</label>
                    <input type="text" name="oh_whatsApp_contact_no"
                        value="{{ old('oh_whatsApp_contact_no') }}"
                        class="@error('oh_whatsApp_contact_no') is-invalid @enderror" required>
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
    </ul>
</div>

