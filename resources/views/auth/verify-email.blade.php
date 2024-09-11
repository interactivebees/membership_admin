@extends('layouts.guest')
@section('content')
<style>
    header, .footer-last{
        display: none;
    }
    .login-section {
        height: 100vh;
        overflow: hidden;
    }
    .head-title-login span{
        color: #9b1c53;
        font-weight: 600;
    }
    .login-dash{
        box-shadow: none;
    }
    .login-image img{
        height: 700px;
        object-fit: cover;
    }
    /*.otp-authunticate input {*/
    /*    border: 1px solid #ccc;*/
    /*    width: 48px;*/
    /*    height: 46px;*/
    /*    margin-right: 15px;*/
    /*    margin-top: 29px;*/
    /*    text-align: center;*/
    /*    font-size: 20px;*/
    /*    padding: 10px;*/
    /*}*/
</style>
<section class="login-section">
    <div class="">
        <div class="row">
            <div class="col-md-5 p-5">
                <div class="login-dash">
                    <div class="login-logo mb-3">
                        <img src="https://www.caho.in/images/caho-main-logo.png">
                    </div>
                    <!-- <div class="card-header">{{ __('Login') }}</div> -->
                    
                    <div class="card-body p-0">
                        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
               <p> {{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
            </div>
        @endif
                        <form method="POST" action="{{ route('verification.send') }}" class="membership-renew-form mt-4">
                            @csrf
                        <div class="login-address active">
                             <div class="head-title-login heading text-black text-capitalize mb-0">Verify  <span class="d-inline">Email?</span></div>
                        <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>  
                            
                            <div class="row mb-0 mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary common-btn w-100">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </div>
                                </div>
                            
                        </div>    
                        </form>
                        
                        <form method="POST" action="{{ route('logout') }}">
                @csrf
 <div class="row mb-0 mt-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="common-btn w-100 text-black bg-white">
                                           {{ __('Log Out') }}
                                        </button>
                                    </div>
                                    </div>
                
            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="login-image">
                    <img src="images/login-image-re.jpg" class="w-100">
                </div>
            </div>
        </div>
        </div>
</section>
<?php /*
<div class="container">
    <div class="row justify-content-center">
        <div class="mb-4 text-sm text-gray-600">
            {{ 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.' }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button>
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</div> */ ?>
@endsection
