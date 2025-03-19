<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class VerificationController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth'),
            new Middleware('signed', only: ['verify']),
            new Middleware('throttle:6,1', only: ['verify', 'resend']),
        ];
    }

    public function notice(Request $request)
    {
        return $request->user()->hasVerifiedEmail() ? redirect()->route('index') : view('verify-email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('index');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->withSuccess('A fresh verification link has been sent to your email address.');
    }
}
