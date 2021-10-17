<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() : View
    {
        return view('admin.home');
    }
}