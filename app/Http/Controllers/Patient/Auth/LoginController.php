<?php

namespace App\Http\Controllers\Patient\Auth;

use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    use AuthenticatesUsers;
    
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest:patient')->except('logout');
    }
    
    public function showLoginForm() : View
    {
        return view('patient.auth.login');
    }
    
    /**
    * Validate the user login request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return void
    *
    * @throws \Illuminate\Validation\ValidationException
    */
    protected function validateLogin(Request $request)
    {
        $user = Patient::where($this->username(), '=', $request->input($this->username()))->first();
        if ($user && ! $user->is_active) {
            throw ValidationException::withMessages([$this->username() => 'Désolé votre compte n\'est pas activé!']);
        }
        
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function guard() : StatefulGuard
    {
        return Auth::guard('patient');
    }
}
