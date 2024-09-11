<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\User;
use App\Models\OtpBlock;
use App\Mail\LoginOtpMail;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    
    protected $blockDuration = 20; // Block duration in minutes
    
    public function otp(Request $request){
        $email = $request->email;
        $otpBlock = OtpBlock::firstOrCreate(['user_email' => $email]);
        
        if ($otpBlock->last_resend_attempt && Carbon::now()->diffInMinutes($otpBlock->last_resend_attempt) > 5) {
            $otpBlock->resend_attempts = 0;
        }
        if ($otpBlock->blocked_until && Carbon::now()->lessThan($otpBlock->blocked_until)) {
            return response()->json(['status'=>403,'error' => 'You are blocked from sending OTP. Please try again later.']);
        }
        $otpBlock->resend_attempts += 1;
        $otpBlock->last_resend_attempt = Carbon::now();

        if ($otpBlock->resend_attempts >= 3) {
            $otpBlock->blocked_until = Carbon::now()->addMinutes($this->blockDuration);
            $otpBlock->resend_attempts = 0;
        }

        $otpBlock->save();
        
        
        
        $user = User::where('email',$request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            
            $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            $otpExpireTime = Carbon::now()->addMinutes(1);
            $user->otp = $otp;
            $user->otp_expire_at = $otpExpireTime;
            $user->save();
            Mail::to($user->email)->send(new LoginOtpMail($otp,$user->name));
            return response()->json([
                'status' => 200,
                'success' => 'Check Your Email.'
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'error' => 'Invalid Email or Password.'
            ]);
        }
    }
    // public function otp(Request $request){
    //     $user = User::where('email',$request->email)->first();
    //     if ($user && Hash::check($request->password, $user->password)) {
            
    //         $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
    //         $otpExpireTime = Carbon::now()->addMinutes(1);
    //         $user->otp = $otp;
    //         $user->otp_expire_at = $otpExpireTime;
    //         $user->save();
    //         Mail::to($user->email)->send(new LoginOtpMail($otp,$user->name));
    //         return response()->json([
    //             'status' => 200,
    //             'success' => 'Check Your Email.'
    //         ]);
    //     }else{
    //         return response()->json([
    //             'status' => 404,
    //             'error' => 'Invalid Email or Password.'
    //         ]);
    //     }
    // }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
