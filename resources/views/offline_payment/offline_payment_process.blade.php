@extends('layouts.guest')
@section('content')
<section class="inner-banner-sec image">
    <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
    <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
    <div class="container">
        <div class="heading ub"><b>Offline </b> Payment</div>
        <ul class="breadcrumb flex-view fc">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Join Now</li>
        </ul>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="offline-thankyou text-center">
                    <img src="images/thank-you-success.png" class="m-auto">
                    <h2 class="heading text-black">Thank You</h2>
                    <p>
                        for choosing our membership plan! We're excited to have you on board. Your journey with us begins here. <br>
                        To complete your membership activation.
                    </p>
                    <p class="text-black">Please follow the steps and complete the payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-type-page membership-bg p-0 pb-5">
    <div class="container">
        <div class="inner-sec mt-0">
            <form class="membership-form">
                <div class="inner-box p-0">
                    <ul class="full-form">
                        <li>
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" name="organization_name" placeholder="" value="{{ $info->organization_name }}" class="" readonly >
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Membership Category</label>
                                <input type="text" name="" placeholder="" value="{{ $info->membershipCategoryget->mname }}" class="" readonly>
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Email</label>
                                @if ($info->form_type == 'personal')
                                <input type="text" name="" placeholder="" value="{{ $info->email }}" class="" readonly>
                                @else
                                <input type="text" name="" placeholder="" value="{{ $info->hospital_email }}" class="" readonly>
                                @endif
                            </div>
                        </li>
                        <li>
                            <div class="input-group">
                                <label>Membership Type</label>
                                <input type="text" name="" placeholder="" value="{{ subscriptionCategoryNameById($info->getLatestMembershipDetail->hospital_category_id) ?? '' }}" class="" readonly>
                            </div>
                        </li>
                    </ul>
                    <ul class="full-form">
                        <li class="w-100 text-center">
                            <a href="{{ route('payment.process') }}" class="default-btn border-0">Complete Your Payment</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
