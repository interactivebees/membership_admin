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
    .otp-authunticate input {
        border: 1px solid #ccc;
        width: 48px;
        height: 46px;
        margin-right: 15px;
        margin-top: 29px;
        text-align: center;
        font-size: 20px;
        padding: 10px;
    }
</style>
<div class="authenticate-loader">
    <img src="images/loading-gif.gif">
</div>
<section class="login-section">
    <div class="">
        <div class="row">
            <div class="col-lg-5 col-md-8 p-5">
                <div class="login-dash">
                    <div class="login-logo">
                        <img src="https://www.caho.in/images/caho-main-logo.png">
                    </div>
                    <!-- <div class="card-header">{{ __('Login') }}</div> -->
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('login') }}" class="membership-renew-form mt-4">
                            @csrf
                        <div class="login-address {{ $errors->has('otp') ? '' : 'active' }}">
                             <div class="head-title-login heading text-black text-capitalize mb-0">Welcome to <span class="d-inline">Caho</span></div>
                        <p>Welcome back , please login to your account</p>
                            <div class="row mb-3 mt-5">
                                <label for="email" class="">{{ __('Email Address') }}</label>
                                <div class="form-group w-100">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span id="errorEmail" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="form-group w-100">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span id="errorPassword" style="color: red;"></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check login-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    @if (Route::has('password.request'))
                                        <a class="forget-pass" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>

                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <p class="common-btn w-100 text-center" id="authenticate">
                                        {{ __('Authenticate') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                            <div id="login" class="otp-authunticate {{ $errors->has('otp') ? 'active' : '' }}">
                                <img src="images/verify-otp.png">
                                <div class="head-title-login heading text-black text-capitalize mb-0">Verify Your <span class="d-inline">OTP</span></div>
                        <p>Please Enter the 6 digit code sent on mobile number and mail</p>
                                <div class="row mb-3 mt-4">
                                    <label for="otp" class="">{{ __('OTP') }}</label>
                                    <div class="form-group w-100 digit-group" >
                                        <input type="text" id="digit-1" name="otp-1" data-next="digit-2" pattern="\d*" maxlength="1" autocomplete="off"/>
                                        <input type="text" id="digit-2" name="otp-2" data-next="digit-3" data-previous="digit-1" pattern="\d*" maxlength="1" autocomplete="off"/>
                                        <input type="text" id="digit-3" name="otp-3" data-next="digit-4" data-previous="digit-2" pattern="\d*" maxlength="1" autocomplete="off"/>
                                        <input type="text" id="digit-4" name="otp-4" data-next="digit-5" data-previous="digit-3" pattern="\d*" maxlength="1" autocomplete="off"/>
                                        <input type="text" id="digit-5" name="otp-5" data-next="digit-6" data-previous="digit-4" pattern="\d*" maxlength="1" autocomplete="off"/>
                                        <input type="text" id="digit-6" name="otp-6" data-previous="digit-5" pattern="\d*" maxlength="1" autocomplete="off"/>

                                    </div>
                                    @error('otp')
                                        <span style="color:red;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary common-btn w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info common-btn w-100" id="resend_otp">
                                            {{ __('Resend Otp') }}
                                        </button>
                                        <div id="timer" style="display:none;"><span id="countdown"></span> seconds.</div>
                                    </div>
                                    <span id="errorOtp" style="color: red;"></span>
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
<script>
    $(document).ready(function() {
        let timer;
        var timer_second_val = localStorage.getItem('timer_second');
        if(timer_second_val > 0)
        {
            startTimer();
        }
        $(".digit-group").find("input").each(function () {
            $(this).on("keydown", function (e) {
                var keyCode = e.keyCode || e.which;
                if ((keyCode < 48 || keyCode > 57) && (keyCode < 96 || keyCode > 105)) {
                    if (keyCode !== 8) {
                        e.preventDefault();
                    } else {
                        $(this).val("");
                    }
                }
            });

            $(this).on("keyup", function (e) {
                var parent = $($(this).parent());
                if (e.keyCode === 8 || e.keyCode === 37) {
                    var prev = parent.find("input#" + $(this).data("previous"));
                    if (prev.length) {
                        $(prev).select();
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                    var next = parent.find("input#" + $(this).data("next"));
                    if (next.length && $(this).val() !== "") {
                        $(next).select();
                    } else if (parent.data("autosubmit")) {
                        parent.submit();
                    }
                }
            });
        });


        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $('#authenticate').click(function() {
            if($('#password').val()!='')
            {
                $("#errorEmail").hide();
                $("#errorPassword").hide();
                $('.authenticate-loader').addClass('active');
                $.ajax({
                    url: "{{ route('otp') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Add CSRF token to headers
                    },
                    data: {
                        email: $('#email').val(),password: $('#password').val()
                    },
                    dataType: 'json',
                    success: function(response) {
                        if(response['status'] == 200){
                            localStorage.clear();
                            localStorage.setItem('timer_second',60);
                            
                            if (timer) {
                                clearInterval(timer);
                            }
                            
                            $("#login").addClass('active');
                            $(".login-address").removeClass('active');
                            $("#errorEmail").hide();
                            
                            startTimer();
                        }else{
                            $("#errorEmail").show();
                            $("#errorEmail").text(response['error']);
                        }
                        $('.authenticate-loader').removeClass('active');
                        // console.log(response);
                       // $("#login").addClass('active');
                        //$(".login-address").removeClass('active');
                    },
                    error: function(xhr) {
                        var errorMessage = "An unknown error occurred.";
        
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMessage = xhr.responseJSON.error;
                        } else if (xhr.responseText) {
                            errorMessage = xhr.responseText;
                        }
                        
                        $("#errorEmail").show();
                        $("#errorEmail").text(errorMessage);
                    }
                });
            }    
            else
            {
                $("#errorPassword").show();
                $("#errorPassword").text('Password required.');
            }
        });
        $('#resend_otp').click(function() {
            $.ajax({
                url: "{{ route('otp') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token to headers
                },
                data: {
                    email: $('#email').val(),password: $('#password').val()
                },
                dataType: 'json',
                success: function(response) {
                    if(response['status'] == 200){
                        localStorage.setItem('timer_second',60);
                        startTimer();
                    }else{
                        $("#errorOtp").show();
                        $("#errorOtp").text(response['error']);
                    }
                },
                error: function(xhr) {
                    var errorMessage = "An unknown error occurred.";
    
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMessage = xhr.responseJSON.error;
                    } else if (xhr.responseText) {
                        errorMessage = xhr.responseText;
                    }
                    
                    $("#errorOtp").show();
                    $("#errorOtp").text(errorMessage);
                }
            });
        });
        
        function startTimer() {
            let countdownElement = document.getElementById('countdown');
            let resendOtpBtn = document.getElementById('resend_otp');
            let timerElement = document.getElementById('timer');
            resendOtpBtn.disabled = true;
            timerElement.style.display = 'block';
            let timeLeft = localStorage.getItem('timer_second');
    
            timer = setInterval(() => {
                timeLeft--;
                countdownElement.innerText = timeLeft;
                localStorage.setItem('timer_second',timeLeft);
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    localStorage.removeItem('timer_second');
                    resendOtpBtn.disabled = false;
                    timerElement.style.display = 'none';
                }
            }, 1000);
        }
    });
</script>

@endsection
