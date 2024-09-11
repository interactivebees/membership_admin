@php
    $coreServices = DB::table('diagnostic_core_services')->where('status',1)->get();
    $supportServices = DB::table('diagnostic_support_services')->where('status',1)->get();
    $core_services_hospital = json_decode($membership->core_services_hospital);
    $support_services_hospital = json_decode($membership->support_services_hospital);
@endphp

<!-- Edit healthcare institution Details Section -->
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
       <h4 class="mb-4">About Healthcare Institution</h4>
       <div class="edit-profile-btn">
          <a href="#edit-about-healthcare-institution" class="default-btn-2 fancybox">Edit Healthcare Institution</a>
       </div>
    </div>
    <div class="profiles-edits d-flex">
       <div class="profile-info">
          <ul class="d-flex justify-content-between flex-wrap">
             <li>
                <label>Accreditation Category</label>
                <p id="accreditation_category">{{ $membership->accreditation_category }}</p>
             </li>
             <li>
                <label>Classification </label>
                <p id="tier_classification">{{ $membership->tier_classification }}</p>
             </li>
             <li>
                <label>Hospital Location</label>
                <p id="hospital_location">{{ $membership->hospital_location }}</p>
             </li>
             <li>
                <label>Diagnostic Centre </label>
                <p id="diagnostic_centre">{{ $membership->diagnostic_centre }}</p>
             </li>
             <li>
                <label class="w-100">Core Services of Hospital</label>
                @if($core_services_hospital != null)
                <p class="ml-0">
                  @foreach($core_services_hospital as $core_services)
                  <span>{{ $core_services }}</span>
                  @endforeach
               </p>
                @endif
             </li>
             <li>
                <label>Support Services of Hospital</label>
                @if($support_services_hospital != null)
                <p>
                  @foreach($support_services_hospital as $support_services)
                  <span>{{ $support_services }}</span>
                  @endforeach
               </p>
                @endif
             </li>
          </ul>
       </div>
    </div>
 </div>
 <!--Ends Here-->

 <!-- Edit about Healthcare Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-about-healthcare-institution">
    <div class="subscription-plan-sec">
       <h4 class="mb-4">Edit Healthcare Institution</h4>
       <div class="edit-profile-form inner-sec">
          <form class="membership-form" method="POST" action="{{ route('update.organization.institution.detail') }}">
            @csrf
            <input name="id" value="{{ $membership->id }}" hidden>
             <div class="inner-box mt-0" id="">
                <ul class="full-form">
                   <li>
                      <div class="input-group">
                         <label>Accreditation Category </label>
                         <select name="accreditation_category" required>
                            <option value="">Select</option>
                            <option {{ $membership->accreditation_category === "Full Accreditation HCO" ? 'selected' : '' }} value="Full Accreditation HCO">Full Accreditation HCO</option>
                            <option {{ $membership->accreditation_category === "SHCO" ? 'selected' : '' }} value="SHCO">SHCO</option>
                            <option {{ $membership->accreditation_category === "Entry Level Hospital" ? 'selected' : '' }} value="Entry Level Hospital">Entry Level Hospital</option>
                            <option {{ $membership->accreditation_category === "Eye Care Organization" ? 'selected' : '' }} value="Eye Care Organization">Eye Care Organization</option>
                            <option {{ $membership->accreditation_category === "AYUSH Hospital" ? 'selected' : '' }} value="AYUSH Hospital">AYUSH Hospital</option>
                            <option {{ $membership->accreditation_category === "Dental Healthcare Organization" ? 'selected' : '' }} value="Dental Healthcare Organization">Dental Healthcare Organization</option>
                            <option {{ $membership->accreditation_category === "Wellness Centre" ? 'selected' : '' }} value="Wellness Centre">Wellness Centre</option>
                            <option {{ $membership->accreditation_category === "Allopathic Clinic" ? 'selected' : '' }} value="Allopathic Clinic">Allopathic Clinic</option>
                            <option {{ $membership->accreditation_category === "Panchkarma Clinic" ? 'selected' : '' }} value="Panchkarma Clinic">Panchkarma Clinic</option>
                            <option {{ $membership->accreditation_category === "PHC (Primary Health Care)" ? 'selected' : '' }} value="PHC (Primary Health Care)">PHC (Primary Health Care)</option>
                            <option {{ $membership->accreditation_category === "Other Stand-alone Clinic" ? 'selected' : '' }} value="Other Stand-alone Clinic">Other Stand-alone Clinic</option>
                            <option {{ $membership->accreditation_category === "Blood Bank / Centre" ? 'selected' : '' }} value="Blood Bank / Centre">Blood Bank / Centre</option>
                            <option {{ $membership->accreditation_category === "Medical College" ? 'selected' : '' }} value="Medical College">Medical College</option>
                            <option {{ $membership->accreditation_category === "Dental College" ? 'selected' : '' }} value="Dental College">Dental College</option>
                        </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                        <label>Classification </label>
                        <select name="tier_classification" required>
                            <option value="">Select</option>
                            <option {{ $membership->tier_classification === "Tier 1 Hospital" ? 'selected' : '' }} value="Tier 1 Hospital">Tier 1 Hospital</option>
                            <option {{ $membership->tier_classification === "Tier 2 Hospital" ? 'selected' : '' }} value="Tier 2 Hospital">Tier 2 Hospital</option>
                            <option {{ $membership->tier_classification === "Tier 3 Hospital" ? 'selected' : '' }} value="Tier 3 Hospital">Tier 3 Hospital</option>
                        </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                        <label>Hospital Location</label>
                        <select name="hospital_location" required>
                            <option value="" >Select</option>
                            <option {{ $membership->hospital_location === "Urban" ? 'selected' : '' }} value="Urban">Urban</option>
                            <option {{ $membership->hospital_location === "Rural" ? 'selected' : '' }} value="Rural">Rural</option>
                        </select>
                      </div>
                   </li>
                   <li>
                      <div class="input-group">
                        <label>Diagnostic Centre </label>
                        <select name="diagnostic_centre" required>
                            <option value="" >Select</option>
                            <option {{ $membership->diagnostic_centre === "Hospital Own Lab" ? 'selected' : '' }} value="Hospital Own Lab">Hospital Own Lab</option>
                            <option {{ $membership->diagnostic_centre === "Outsourced" ? 'selected' : '' }} value="Outsourced">Outsourced</option>
                        </select>
                      </div>
                   </li>
                   <li class="full step-checkbox w-100">
                      <div class="input-group">
                         <label>Support Services of Hospital</label>
                         <div class="multiple-checkbox" id='support_services_hospital'>
                            @foreach ($supportServices as $supportService)
                            <div class="check-multi">
                                <input type="checkbox" name="support_services_hospital[]" value="{{  $supportService->name }}"> {{ $supportService->name }}
                            </div>
                            @endforeach
                         </div>
                      </div>
                   </li>

                   <li class="full step-checkbox w-100">
                      <div class="input-group">
                         <label>Core Services</label>
                         <div class="multiple-checkbox" id="core_services_hospital">
                            @foreach ($coreServices as $coreService)
                            <div class="check-multi">
                                <input type="checkbox" name="core_services_hospital[]" value="{{ $coreService->name }}"> {{ $coreService->name }}
                            </div>
                            @endforeach
                        </div>
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

 <script>
    $(document).ready(function() {
        var support_services_hospital = @json($support_services_hospital);
        $('#support_services_hospital input').each(function() {
            var selectedVal = $(this).val();
            if ($.inArray(selectedVal, support_services_hospital) !== -1) {
                $(this).attr('checked', 'true');
            }
        });


        var core_services_hospital = @json($core_services_hospital);
        $('#core_services_hospital input').each(function() {
            var selectedVal = $(this).val();
            if ($.inArray(selectedVal, core_services_hospital) !== -1) {
                $(this).attr('checked', 'true');
            }
        });
    });
 </script>
