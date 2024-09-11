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
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                    
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                            <!-- Email Address -->
                            <div class="head-title-login heading text-black text-capitalize mb-0">Reset <span class="d-inline">Password?</span></div>
                            <div class="mt-5">
                                <label for="email" class="">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $request->email)}}" required autofocus />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                    
                            <!-- Password -->
                            <div class="mt-4">
                                <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <label for="password_confirmation" class="">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required/>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-primary common-btn w-100">
                                    {{ __('Reset Password') }}
                                </button>
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
@endsection
<!--<x-guest-layout>-->
<!--    <form method="POST" action="{{ route('password.store') }}">-->
<!--        @csrf-->

        <!-- Password Reset Token -->
<!--        <input type="hidden" name="token" value="{{ $request->route('token') }}">-->

        <!-- Email Address -->
<!--        <div>-->
<!--            <x-input-label for="email" :value="__('Email')" />-->
<!--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />-->
<!--            <x-input-error :messages="$errors->get('email')" class="mt-2" />-->
<!--        </div>-->

        <!-- Password -->
<!--        <div class="mt-4">-->
<!--            <x-input-label for="password" :value="__('Password')" />-->
<!--            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />-->
<!--            <x-input-error :messages="$errors->get('password')" class="mt-2" />-->
<!--        </div>-->

        <!-- Confirm Password -->
<!--        <div class="mt-4">-->
<!--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />-->

<!--            <x-text-input id="password_confirmation" class="block mt-1 w-full"-->
<!--                                type="password"-->
<!--                                name="password_confirmation" required autocomplete="new-password" />-->

<!--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />-->
<!--        </div>-->

<!--        <div class="flex items-center justify-end mt-4">-->
<!--            <x-primary-button>-->
<!--                {{ __('Reset Password') }}-->
<!--            </x-primary-button>-->
<!--        </div>-->
<!--    </form>-->
<!--</x-guest-layout>-->

