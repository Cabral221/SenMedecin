<?php

namespace App\Http\Controllers\Patient\Auth;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm() : View
    {
        return view('patient.auth.passwords.email');
    }

    /**
    * Get the broker to be used during password reset.
    *
    * @return \Illuminate\Contracts\Auth\PasswordBroker
    */
    public function broker()
    {
        return Password::broker('patients');
    }
}
