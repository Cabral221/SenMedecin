<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() : void
    {
        dd('En développement...');
    }

}