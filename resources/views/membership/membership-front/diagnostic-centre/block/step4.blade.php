@php
    $coreServices = DB::table('diagnostic_core_services')->where('status',1)->get();
@endphp
<div class="members-section" id="about-healthcare">
    <div class="inner-box">
        <h4 class="membership-heading">Core Diagnostic Services </h4>
        <ul class="full-form">
            <div class="core-services-sec">
                <div class="core-head">
                    <h3>Core Services</h3>
                    <div class="add-service">
                        <p>+ Add other service</p>
                    </div>
                </div>
                <div class="core-tbody">
                    @foreach($coreServices as $coreService)
                    <div class="service-flex d-flex">
                        <div class="main-core">{{ $coreService->name }}</div>
                        <input hidden type="text" name="cs_core_service_name[]" placeholder="Core Services" value="{{ $coreService->name }}" class="@error('cs_core_service_name') is-invalid @enderror" required>
                        <div class="core-detail">
                            <li>
                                <div class="input-group">
                                    <label>Name of the Person</label>
                                    <input type="text" name="cs_name[]" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="input-group">
                                    <label>Designation</label>
                                    <input type="text" name="cs_designation[]" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="input-group">
                                    <label>Email ID</label>
                                    <input type="text" name="cs_email[]" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="input-group">
                                    <label>Mobile No</label>
                                    <input type="text" name="cs_mobile[]" placeholder="">
                                </div>
                            </li>
                            <li>
                                <div class="input-group">
                                    <label>Accreditation Status</label>
                                    <input type="text" name="cs_status[]" placeholder="">
                                </div>
                            </li>
                        </div>
                    </div>
                    @endforeach

                    <div id="append-other-service"></div>
                </div>
            </div>
        </ul>
    </div>
    <ul class="full-form">
        <li class="text-left">
            <button type="button" class="btn-submit back-btn" id="back-step-3">Back</button>
        </li>
        <li class="text-right">
            <button type="button" class="btn-submit" id="step4">Continue</button>
        </li>
    </ul>
</div>

<script>
    $('document').ready(function(){
        $('.add-service').click(function(){
            var htmlToAppend = `<div class="service-flex d-flex">
                                    <div class="main-core">
                                        <li class="w-100 mt-2">
                                            <div class="input-group">
                                                <input type="text" name="cs_core_service_name[]" placeholder="Core Services"  class="@error('cs_core_service_name') is-invalid @enderror" required>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="core-detail">
                                        <li>
                                            <div class="input-group">
                                                <label>Name of the Person</label>
                                                <input type="text" name="cs_name[]" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <label>Designation</label>
                                                <input type="text" name="cs_designation[]" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <label>Email ID</label>
                                                <input type="text" name="cs_email[]" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <label>Mobile No</label>
                                                <input type="text" name="cs_mobile[]" placeholder="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <label>Accreditation Status</label>
                                                <input type="text" name="cs_status[]" placeholder="">
                                            </div>
                                        </li>
                                    </div>
                                </div>`;

                $('#append-other-service').append(htmlToAppend);
        });
    });
</script>
