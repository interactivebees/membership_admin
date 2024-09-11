<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;
use App\Models\OtpBlock;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        $user = Auth::user();

        $otpArray = [
            $this->input('otp-1'),
            $this->input('otp-2'),
            $this->input('otp-3'),
            $this->input('otp-4'),
            $this->input('otp-5'),
            $this->input('otp-6')
        ];
        $email = $user->email;
        $otpBlock = OtpBlock::firstOrCreate(['user_email' => $email]);
        
        if ($otpBlock->last_wrong_attempt && Carbon::now()->diffInMinutes($otpBlock->last_wrong_attempt) > 5) {
            $otpBlock->wrong_attempts = 0;
        }
        
        if ($otpBlock->wrong_attempt_block && Carbon::now()->lessThan($otpBlock->wrong_attempt_block)) {
            Auth::logout();
            throw ValidationException::withMessages([
                'otp' => 'You are blocked from attempting OTP verification. Please try again later.',
            ]);
        }
        $combinedOTP = implode('', $otpArray);

        if ($user->otp && $user->otp_expire_at >= now()) {
            $enteredOtp = $combinedOTP;
            if ($enteredOtp == $user->otp) {
                $otpBlock->wrong_attempts = 0;
                $otpBlock->save();
                Auth::login($user);
            } else {
                $otpBlock->wrong_attempts += 1;
                $otpBlock->last_wrong_attempt = Carbon::now();

                if ($otpBlock->wrong_attempts >= 3) {
                    $otpBlock->wrong_attempt_block = Carbon::now()->addMinutes(20);
                    $otpBlock->wrong_attempts = 0;
                    
                    $otpBlock->save();

                    Auth::logout();
                    throw ValidationException::withMessages([
                        'otp' => 'Invalid OTP and you are blocked from attempting OTP verification.',
                    ]);
                }
    
                $otpBlock->save();

                Auth::logout();
                throw ValidationException::withMessages([
                    'otp' => 'Invalid OTP.',
                ]);
            }
        } else {
            $otpBlock->wrong_attempts += 1;
            $otpBlock->last_wrong_attempt = Carbon::now();

            if ($otpBlock->wrong_attempts >= 3) {
                $otpBlock->wrong_attempt_block = Carbon::now()->addMinutes(20);
                $otpBlock->wrong_attempts = 0;
            }

            $otpBlock->save();
            
            Auth::logout();
            throw ValidationException::withMessages([
                'otp' => 'Invalid or expired OTP.',
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
