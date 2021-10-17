<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IdentifiantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:patient');
    }

    public function index(string $id) : View
    {
        $identifiant = Patient::where('id',Auth::guard('patient')->user()->id)->first();
        return view('patient.identifiant.index',compact('identifiant'));
    }
}
