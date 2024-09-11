<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $user = $request->user();
        
        // Send verification email if the user hasn't verified their email
        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
            return view('auth.verify-email', ['resent' => true]);
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
