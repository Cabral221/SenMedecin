<?php

namespace App\Http\Controllers\Patient;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PatientController extends Controller
{

    public function index() : View
    {
        return view('patient.index');
    }

    public function profile() : View
    {
        $id = auth('patient')->user()->id;

        return view('patient.profile.update',compact('id'));
    }

    public function update( Request $request, string $id) : RedirectResponse
    {

        $validator = $this->validate($request,[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'birthday' => 'required|string',
            'address' => 'required|string',
        ]);
        $update_profile_complete =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_profile_complete->first_name = $request->first_name;
        $update_profile_complete->last_name = $request->last_name;
        $update_profile_complete->phone = $request->phone;
        $update_profile_complete->birthday = $request->birthday;
        $update_profile_complete->address = $request->address;
        $update_profile_complete->save();
        return back();
    }

    public function email(Request $request, string $id) : RedirectResponse
    {
        $validator = $this->validate($request,[
            'email' => 'required|string',
        ]);
        $update_email =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_email->email = $request->email;
        $update_email->save();
        return back();
    }

    public function password( Request $request, string $id) : RedirectResponse
    {
        $validator = $this->validate($request,[
            'password' => 'required|string|confirmed',
            ]);
        
        $update_password =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_password->password = Hash::make($request->password);
        $update_password->save();
        return back();
    }

    public function destroy(string $id) : RedirectResponse
    {
        Patient::where('id',Auth::guard('patient')->user()->id)->delete();
        return redirect()->route('patient.home');
    }

    public function confirmPhonePage() : View
    {
        return view('patient.tampon');
    }

    public function confirmPhone(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'code' => ['required', 'numeric', 'digits:6'],
        ]);
        /** @var Patient $patient */
        $patient = auth('patient')->user();
        if($request->code !== $patient->phone_verification_token) {
            return redirect()->back()
                    ->withInput()
                    ->withErrors(['code' => 'Désolé ! Le code saisi ne correspond pas.']);
        }

        $patient->update([
            'phone_verification_token' => null,
        ]);
        return redirect()->route('patient.home');
    }
}
