<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        dd('pages Clients');
    }

}