<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    

    // public function __construct()
    // {
    //     $this->middleware('auth:patient');
    // }

    public function index(){
        return view('patient.index');
    }

    public function about(){

    }

    public function blog(){
        
    }

    public function contact(){

    }
}
