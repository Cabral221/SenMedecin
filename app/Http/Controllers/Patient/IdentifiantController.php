<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IdentifiantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:patient');
    }

    public function index($id){
        $identifiant = Patient::where('id',Auth::guard('patient')->user()->id)->first();
        return view('patient.identifiant.index',compact('identifiant'));
    }
}
