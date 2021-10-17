<?php

namespace App\Http\Controllers\Responsable;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ResponsableController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:responsable');
    }

    public function index() : View
    {
        return view('responsable.home');
    }

}
