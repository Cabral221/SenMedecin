<?php

namespace App\Http\Controllers\Responsable;

use App\Http\Controllers\Controller;

class ResponsableController extends Controller
{

    public function __construct(){
        $this->middleware('auth:responsable');
    }

    public function index()
    {
        return view('responsable.home');
    }

}