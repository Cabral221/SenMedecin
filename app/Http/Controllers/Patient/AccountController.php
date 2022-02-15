<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{

    public function auth() : Patient
    {
        return auth('patient')->user();
    }
    
    public function index() : View
    {
        return view('patient.account.index');
    }

    public function edit() : View
    {
        return view('patient.account.update', ['id' => $this->auth()->id]);
    }

    public function update(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'first_name' => ['required' , 'min:2', 'string'],
            'last_name' => ['required' , 'min:2', 'string'],
            'birthday' => ['required', 'date'],
            'address' => ['required', 'string'],
        ]);

        $this->auth()->update($request->all());
        return redirect()->back()->with(['success' => 'Modifications réussies!']);
    }

    public function updateEmail(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'unique:patients,email,' . $this->auth()->id]
        ]);

        $this->auth()->update(['email' => $request->email]);
        return redirect()->back()->with(['success' => 'Email enregistré!']);
    }

    public function updatePhone(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'phone' => ['required', 'numeric', 'unique:patients,phone,' . $this->auth()->id],
        ]);

        $this->auth()->update(['phone' => $request->phone]);
        return redirect()->back()->with(['success' => 'Numéro de téléphone enregistré!']);
    }

}