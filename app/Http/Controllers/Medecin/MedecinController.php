<?php

namespace App\Http\Controllers\Medecin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MedecinController extends Controller {

    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function index() : View
    {
        return view('medecin.home');
    }


}