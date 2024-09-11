<div class="members-section active mt-5" id="organization-details">
    @include('membership.membership-front.diagnostic-centre.block.type')

    <div class="inner-box" id="">
        <h4 class="membership-heading">Diagnostic Centre Details</h4>
        <ul class="full-form">
            <input type="text" name="membership_category_id" placeholder="" value="{{ request()->get('membership') }}" required hidden>
            <input type="text" name="form_type" placeholder="" value="diagnostic" required hidden>

            <li>
                <div class="input-group">
                    <label>Name of the Diagnostic Centre*</label>
                    <input type="text" name="organization_name" placeholder="" value="{{ old('organization_name') }}" class="@error('organization_name') is-invalid @enderror" required>
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>Diagnostic Centre Logo</label>
                    <input id="hospital_logo_input" type="file" name="hospital_logo" value="{{ old('hospital_logo') }}" accept="image/*">
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>Diagnostic Centre Email</label>
                    <input type="email" name="hospital_email" value="" class="" required="">
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>Street Address</label>
                    <input type="text" name="street_address" placeholder="" value="{{ old('street_address') }}"
                        class="@error('street_address') is-invalid @enderror" required>
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

            <li class="">
                <div class="input-group">
                    <label>State</label>
                    <select name="state" class="@error('state') is-invalid @enderror" required>
                        <option>Please Select</option>
                    </select>
                    <!-- <input type="text" name="state" placeholder="" value="{{ old('state') }}"
                        class="@error('state') is-invalid @enderror" required> -->
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>City</label>
                    <select name="city" class="@error('city') is-invalid @enderror" required>
                        <option>Please Select</option>
                    </select>
                </div>
            </li>

            <li class="">
                <div class="input-group">
                    <label>District</label>
                    <input type="text" name="district" placeholder="" value="{{ old('district') }}"
                        class="@error('district') is-invalid @enderror">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>PAN No.</label>
                    <input type="text" name="pan_no" placeholder="" maxlength="10" minlength="10" value="{{ old('pan_no') }}">
                </div>
            </li>

            <li>
                <div class="input-group">
                    <label>GST Registration Number</label>
                    <input type="text" name="gst_registration_number" placeholder="" maxlength="15" minlength="15"
                        id="" value="{{ old('gst_registration_number') }}">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <label>Telephone No. (with STD Code) / Mobile</label>
                    <input type="text" placeholder="" name="hospital_mobile" value="{{ old('hospital_mobile') }}"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="13"
                        class="@error('hospital_mobile') is-invalid @enderror">
                </div>
            </li>
            
            <li>
                <div class="input-group">
                    <label>Website URL</label>
                    <input type="text" placeholder="" value="{{ old('hospital_website_link') }}"
                        class="@error('hospital_website_link') is-invalid @enderror" name='hospital_website_link'>
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
    <ul class="full-form">
        <li class="full text-right">
            <button type="button" class="btn-submit" id="step1">Continue</button>
        </li>
    </ul>
</div>
