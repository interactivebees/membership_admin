@extends('layouts.guest')
@section('content')
<section class="login-dashboard-section">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">
                <div class="login-dash success-msg text-center p-5 mt-5">
                    <img src="{{ url('images/success-notification.png') }}" class="m-auto mb-3">
                    <p class="mt-4">Offline Success</p>
                    <p class="mt-4">Dear <b>Member</b></p>
                    <p>Your Membership Status is not yet verified by CAHO Admin. You will be able to login once you are approved</p>
                    <p>In meantime you can call us at <a href="tel: +91-7878787878" class="forget-pass">+91-7878787878</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
