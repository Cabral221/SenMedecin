<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Patient;
use App\Http\Controllers\Controller;

class ChildController extends Controller {

    public function __construct(){
        $this->middleware('auth:medecin');
    }

    public function index(Patient $patient){
        return view('medecin.patient.child', compact('patient'));
    }

}