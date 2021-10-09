<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Responsable;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServiceController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:responsable');
    }

    public function index() : View
    {
        $services = $this->responsable()->partener->services;
        
        return view('responsable.service.index', compact('services'));
    }

    public function responsable() : Responsable
    {
        return auth('responsable')->user();
    }
    
}