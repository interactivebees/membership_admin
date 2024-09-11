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
                    <div class="login-logo">
                        <img src="https://www.caho.in/images/caho-main-logo.png">
                    </div>
                    <!-- <div class="card-header">{{ __('Login') }}</div> -->
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('password.email') }}" class="membership-renew-form mt-4">
                            @csrf
                        <div class="login-address active">
                             <div class="head-title-login heading text-black text-capitalize mb-0">Forget <span class="d-inline">Password?</span></div>
                        <p>Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>  
                            <div class="row mb-3 mt-5">
                                <label for="email" class="">{{ __('Email Address') }}</label>
                                <div class="form-group w-100">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus />
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <div class="row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary common-btn w-100">
                                            {{ __('Email Password Reset Link') }}
                                        </button>
                                    </div>
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
    <?php /* <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>*/ ?>
@endsection