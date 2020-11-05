<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index(){
        return view('patient.home');
    }

    public function about(){

    }

    public function blog(){
        
    }

    public function contact(){

    }
}
