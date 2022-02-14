<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

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

}