<?php

namespace App\Http\Controllers\Patient;
use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Notifications\PhoneVerification;

class PatientController extends Controller
{

    public function auth() : Patient
    {
        return auth('patient')->user();
    }
    
    public function index() : View
    {
        return view('patient.index');
    }
    
    /**
     * get the page of confirm phone form
     *
     * @return View|RedirectResponse
     */
    public function confirmPhonePage()
    {
        if($this->auth()->hasValidPhone()) return redirect()->route('patient.home');
        return view('patient.confirm-phone');
    }
    
    public function confirmPhone(Request $request) : RedirectResponse
    {
        $this->validate(
            $request, [
            'code' => ['required', 'numeric', 'digits:6'],
            ]
        );
        
        if($request->code != $this->auth()->phone_verification_token) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['code' => 'Désolé ! Le code saisi ne correspond pas.']);
        }
        
        $this->auth()->update(
            [
            'phone_verification_token' => null,
            ]
        );

        return redirect()->route('patient.home');
    }

    public function resendPhoneToken() : RedirectResponse
    {
        $this->auth()->update(
            [
            'phone_verification_token' => mt_rand(100000, 999999),
            ]
        );

        // Verify phone notification
        $this->auth()->notify(new PhoneVerification($this->auth()->phone_verification_token));

        return redirect()->back()->with('success', 'Un nouveau code a été envoyé. Merci de verifier votre téléphone');
    }
}
