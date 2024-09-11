@php
    $hospitalCategories = DB::table('hospital_categories')
    ->where('status',1)->where('membership_category_id', request()->get('membership'))
    ->orderBy('sort')->get();
    $membershipCategorie = DB::table('membership_categories')->where('id',request()->get('membership'))->first();
@endphp
@extends('layouts.guest')
@section('content')
<div class="wraper">
    <div class="container-fluid p-0">
        <div class="d-flex">
            @include('layouts.sidebar')
            <div class="right dash-right">
            @include('layouts.user-header')
                <div class="right-dashboard">
                    <div class="main-dash" id="main-dash1">
                        <div class="subscription-plan-sec">
                            <h4>Subscription Plan</h4>
                            <div class="d-flex justify-content-between">
                                <div class="subscription-head">
                                    {{ $membershipData->getLatestMembershipDetail->currency_symbol . $membershipData->getLatestMembershipDetail->price}}
                                    <span>{{ $membershipData->membershipCategoryget->validity }} Year Plan</span>
                                </div>
                                <p class="align-self-end">Expire in {{ $days['remaining_days'] }} days</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $days['percentage_completed'] }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $days['percentage_completed'] }}%">
                                    <span class="sr-only">{{ $days['percentage_completed'] }}% Complete</span>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="subscript-btn"><a href="#single-hospital-renew" class="mr-3">Renew Your Plan</a></div>
                            </div>


                         <!--Individual SUbscription Plan-->
                            <div class="edit-profiles-forms form-type-page p-0 mw-100 mt-5" id="single-hospital-renew">
                                <div class="">
                                    <h4 class="mb-4">Renew Your Plan</h4>
                                    <div class="edit-profile-form inner-sec">
                                        <form class="membership-form" method="POST" action="{{ route('renewal') }}">
                                            @csrf
                                            <input name="id" value="{{ $membershipData->id }}" hidden>
                                            <input name="membership_category_id" value="{{ $membershipData->membership_category_id }}" hidden>
                                            <div class="" id="group_hospital_details">
                                                <div class="inner-box mt-0">
                                                    <ul class="full-form">
                                                    <li>
                                                        @if ($membershipData->form_type == 'personal')
                                                        <div class="input-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="" name="hospital_name"
                                                                value="{{ $membershipData->title.' '.$membershipData->first_name.' '.$membershipData->last_name }}"
                                                                required="" readonly />
                                                        </div>
                                                        @elseif ($membershipData->form_type == 'diagnostic')
                                                        <div class="input-group">
                                                            <label>Organization Name</label>
                                                            <input type="text" class="" name="hospital_name" value="{{ $membershipData->organization_name }}" required=""
                                                                readonly />
                                                        </div>
                                                        @else
                                                        <div class="input-group">
                                                            <label>Organization Name</label>
                                                            <input type="text" class="" name="hospital_name" value="{{ $membershipData->organization_name }}" required=""
                                                                readonly />
                                                        </div>
                                                        @endif
                                                    </li>
                                                        <li>
                                                            <div class="input-group">
                                                            <label>Select Category</label>
                                                            <select name="hospital_category_id" class="" required>
                                                                @foreach ($membershipCategory as $membershipCat)
                                                                <option value="{{ $membershipCat->c_id }}" {{ $membershipCat->c_id == $membershipData->getLatestMembershipDetail->hospital_category_id ? 'selected' : '' }}>{{ $membershipCat->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="full step-checkbox mt-4 border-0 p-0" style="width:100% !important;">
                                                    <div class="input-group">
                                                        <label style="position: relative !important;color: #000 !important;background: #fff !important">Mode of Payment</label>
                                                        <div class="multiple-checkbox justify-content-between w-100">
                                                            <div class="multibox d-flex">
                                                                <div class="check-multi w-auto mr-4">
                                                                    <input type="radio" name="payment_mode" value="Online" checked>Online <!-- Add checked attribute here -->
                                                                </div>
                                                                <div class="check-multi w-auto">
                                                                    <input type="radio" name="payment_mode" value="Offline">Offline
                                                                </div>
                                                            </div>
                                                            <div class="paybl-am">
                                                                <span id="payabalAmount"></span>
                                                                <span id="discountedAmount"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <ul class="full-form">
                                                <li class="text-right w-100">
                                                    <button type="submit" class="btn-submit">Submit</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Ends Here-->

                            <!-- Change the category -->
                            @if($membershiptype != null)
                            <div class="edit-profiles-forms form-type-page p-0 mw-100 mt-5 d-block" id="single-hospital-upgrade">
                                <div class="">
                                    <h4 class="mb-4">Upgrade Your Plan</h4>
                                    <div class="edit-profile-form inner-sec">
                                        <form class="membership-form" method="POST" action="{{ route('upgrade') }}">
                                            @csrf
                                            <input name="id" value="{{ $membershipData->id }}" hidden>
                                            <div class="">
                                                <div class="inner-box mt-0">
                                                    <ul class="full-form">
                                                        <li class="w-100">
                                                            <div class="input-group select-cat" >
                                                                <label>Select Membership Category</label>
                                                                <select name="membership_category_id" class="classification @error('membership_category_id') is-invalid @enderror" required>
                                                                    @foreach ($membershiptype as $membershiptyp)
                                                                        <option value="{{ $membershiptyp->id }}" {{ old('membership_category_id') === $membershiptyp->id ? 'selected' : '' }}>{{ $membershiptyp->mname }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </li>
                                                    <li>
                                                        @if ($membershipData->form_type == 'personal')
                                                        <div class="input-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="" name="hospital_name"
                                                                value="{{ $membershipData->title.' '.$membershipData->first_name.' '.$membershipData->last_name }}"
                                                                required="" readonly />
                                                        </div>
                                                        @elseif ($membershipData->form_type == 'diagnostic')
                                                        <div class="input-group">
                                                            <label>Organization Name</label>
                                                            <input type="text" class="" name="hospital_name" value="{{ $membershipData->organization_name }}" required=""
                                                                readonly />
                                                        </div>
                                                        @else
                                                        <div class="input-group">
                                                            <label>Organization Name</label>
                                                            <input type="text" class="" name="hospital_name" value="{{ $membershipData->organization_name }}" required=""
                                                                readonly />
                                                        </div>
                                                        @endif
                                                    </li>
                                                        <li>
                                                            <div class="input-group">
                                                            <label>Select Category</label>
                                                            <select name="hospital_category_id" class="" required>
                                                                @foreach ($membershiptypeCategory as $membershiptypeCate)
                                                                <option value="{{ $membershiptypeCate->c_id }}">{{ $membershiptypeCate->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="full step-checkbox mt-4 border-0 p-0" style="width:100% !important;">
                                                    <div class="input-group">
                                                        <label style="position: relative !important;color: #000 !important;background: #fff !important">Mode of Payment</label>
                                                        <div class="multiple-checkbox justify-content-between w-100">
                                                            <div class="multibox d-flex">
                                                                <div class="check-multi w-auto mr-4">
                                                                    <input type="radio" name="payment_mode" value="Online" checked>Online <!-- Add checked attribute here -->
                                                                </div>
                                                                <div class="check-multi w-auto">
                                                                    <input type="radio" name="payment_mode" value="Offline">Offline
                                                                </div>
                                                            </div>
                                                            <div class="paybl-am">
                                                                <span id="uppayabalAmount"></span>
                                                                <span id="updiscountedAmount"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <ul class="full-form">
                                                <li class="text-right w-100">
                                                    <button type="submit" class="btn-submit">Submit</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- Ends Here -->

                            <div class="d-flex justify-content-between mt-4">
                            <div class="payment-det-sec">
                                <h5>Payment Details</h5>
                                <div class="payment-method-sec">
                                    <ul>
                                        <li class="p-0 w-100">
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Transaction ID:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ formatTrackingID($membershipData->getLatestMembershipDetail->tracking_id) }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Payment Method:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ $membershipData->getLatestMembershipDetail->payment_mode }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Order Status:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ $membershipData->getLatestMembershipDetail->order_status }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Start Date:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ dateFormate($membershipData->getLatestMembershipDetail->s_date) }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>End Date:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ dateFormate($membershipData->getLatestMembershipDetail->e_date) }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Order Message:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ $membershipData->getLatestMembershipDetail->status_message }}</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="payment-det-sec">
                                <h5>Invoice Billing Details</h5>
                                <div class="billing-detail">
                                    <ul>
                                        <li class="p-0 w-100">
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Name:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ Auth()->user()->name }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Organaization:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ Auth()->user()->name }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Address</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ Auth()->user()->address }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Email:</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ Auth()->user()->email }}</p>
                                                </div>
                                            </div>
                                            <div class="pay-flex p-3 border-bottom w-100">
                                                <div class="pay-image mr-2">
                                                    <p><b>Telephone No.</b></p>
                                                </div>
                                                <div class="mem-pay-no">
                                                    <p class="pay-num">{{ Auth()->user()->phone }}</p>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>
                                    <!--<div class="add-payment">-->
                                    <!--    <a href="#" class="mr-2">update Account Details</a>-->
                                    <!--    <a href="#">update Billing Method</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function getAmountDetailsOnCategoryChange() {
        getAmountDetail(
            $("#single-hospital-renew input[name='membership_category_id']").val(),
            $('#single-hospital-renew select[name="hospital_category_id"]').val()
        );
    }

    function getAmountDetailsOnCategoryChangeUP() {
        getAmountDetailUp(
            $("#single-hospital-upgrade select[name='membership_category_id']").val(),
            $('#single-hospital-upgrade select[name="hospital_category_id"]').val()
        );
    }

    // Call the function on page load
    $(document).ready(function() {
        $('#single-hospital-renew').slideUp();

        $('.subscript-btn').on('click', function() {
            $('#single-hospital-renew').slideToggle();
        });

        getAmountDetailsOnCategoryChange();
        getAmountDetailsOnCategoryChangeUP();
    });

    // Bind the function to the change event of the select element
    $('#single-hospital-renew select[name="hospital_category_id"]').on('change', function() {
        getAmountDetailsOnCategoryChange();
    });

    $('#single-hospital-upgrade select[name="hospital_category_id"]').on('change', function() {
        getAmountDetailsOnCategoryChangeUP();
    });

    function getAmountDetail(membership_category_id,hospital_category_id,gp_hospital_categories_id) {
        $.ajax({
            type: 'POST',
            url: '{{ route('payable.amount') }}',
            data: {
                membership_category_id : membership_category_id,
                hospital_category_id : hospital_category_id,
                gp_hospital_categories_id : gp_hospital_categories_id
            },
            success: function(response) {
                $("#payabalAmount").text(response.data.payable_amount +''+ response.data.currency_symbol);
                if(response.data.total_discount != 0){
                    $("#discountedAmount").text(response.data.total_discount +''+ response.data.currency_symbol);
                }else{
                    $("#discountedAmount").hide();
                }

                console.log(response.data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function getAmountDetailUp(membership_category_id,hospital_category_id,gp_hospital_categories_id) {
        $.ajax({
            type: 'POST',
            url: '{{ route('payable.amount') }}',
            data: {
                membership_category_id : membership_category_id,
                hospital_category_id : hospital_category_id,
                gp_hospital_categories_id : gp_hospital_categories_id
            },
            success: function(response) {
                $("#uppayabalAmount").text(response.data.payable_amount +''+ response.data.currency_symbol);
                if(response.data.total_discount != 0){
                    $("#updiscountedAmount").text(response.data.total_discount +''+ response.data.currency_symbol);
                }else{
                    $("#updiscountedAmount").hide();
                }

                console.log(response.data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
@endsection
