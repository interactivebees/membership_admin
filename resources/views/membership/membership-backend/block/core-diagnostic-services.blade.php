@php
    use App\Models\Membership\MembershipRegCoreDiagService;
    $coreServices = DB::table('diagnostic_core_services')
        ->where('status', 1)
        ->get();

    $coreDiagServices = MembershipRegCoreDiagService::where('membership_register_id', $membership->id)->get();
@endphp
<!-- Edit Contact Organaization 1 Details Section -->
<style>
    .core-services-sec {
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-top: 30px;
        overflow-x: scroll;
    }
    .test-sec {
        max-height: 250px;
        min-width: 1200px;
        overflow: auto;
    }
    .core-detail{
        border-bottom: 1px solid #ccc;
        padding: 20px 20px 10px;
    }
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }
</style>
<div class="subscription-plan-sec mb-3">
    <div class="edit-profile-form d-flex justify-content-between">
        <h4 class="mb-4">Core Diagnostic Services</h4>
        <div class="edit-profile-btn">
            <a href="#edit-diag-serv" class="default-btn-2 fancybox">Edit</a>
        </div>
    </div>
    <div class="profile-info w-100">
        <div class="core-diagnostic-final" id="">
            <table>
                <tbody>
                    <tr>
                        <th>SNo</th>
                        <th>Core Services</th>
                        <th>Name of the Contact Person</th>
                        <th>Designation</th>
                        <th>Email ID</th>
                        <th>Mobile No</th>
                        <th>Accreditation Status</th>
                    </tr>
                    @foreach ($coreDiagServices as $key => $coreDiagService)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $coreDiagService->cs_core_service_name }}</td>
                            <td>{{ $coreDiagService->cs_name }}</td>
                            <td>{{ $coreDiagService->cs_designation }}</td>
                            <td>{{ $coreDiagService->cs_email }}</td>
                            <td>{{ $coreDiagService->cs_mobile }}</td>
                            <td>{{ $coreDiagService->cs_status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--Ends Here-->
<!-- Edit about Organaization Head organaization person 1 Details Popup -->
<div class="edit-profiles-forms form-type-page p-0" id="edit-diag-serv">
    <div class="subscription-plan-sec">
        <h4 class="mb-4">Edit Core Diagnostic Services</h4>
        <div class="edit-profile-form inner-sec">
            <form class="membership-form" method="POST" action="{{ route('update.core.service') }}">
                @csrf
                <input name="membership_register_id" value="{{ $membership->id }}" hidden>
                <div class="core-head">
                        <h3>Core Services</h3>
                        <div class="add-service">
                            <p>+ Add other service</p>
                        </div>
                    </div>
                <div class="core-services-sec">
                    <div class="test-sec">
                    <div class="core-tbody">
                        <div id="append-other-service"></div>
                        @foreach ($coreDiagServices as $coreDiagService)
                            <input name="cs_id[]" value="{{ $coreDiagService->id }}" hidden>

                            <div class="service-flex d-flex">
                                <div class="main-core">{{ $coreDiagService->cs_core_service_name }}</div>
                                <input hidden type="text" name="cs_core_service_name[]" placeholder="Core Services"
                                    value="{{ $coreDiagService->cs_core_service_name }}"
                                    class="@error('cs_core_service_name') is-invalid @enderror" required>

                                <div class="core-detail">
                                    <li>
                                        <div class="input-group">
                                            <label>Name of the Person</label>
                                            <input type="text" name="cs_name[]" value="{{ $coreDiagService->cs_name }}" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group">
                                            <label>Designation</label>
                                            <input type="text" name="cs_designation[]" value="{{ $coreDiagService->cs_designation }}" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group">
                                            <label>Email ID</label>
                                            <input type="text" name="cs_email[]" value="{{ $coreDiagService->cs_email }}" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group">
                                            <label>Mobile No</label>
                                            <input type="text" name="cs_mobile[]" value="{{ $coreDiagService->cs_mobile }}" placeholder="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group">
                                            <label>Accreditation Status</label>
                                            <input type="text" name="cs_status[]" value="{{ $coreDiagService->cs_status }}" placeholder="">
                                        </div>
                                    </li>
                                </div>
                            </div>
                        @endforeach
                        
                    </div></div>
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
<script>
    $('document').ready(function() {
        $('.add-service').click(function() {
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
<!-- Ends Here -->
