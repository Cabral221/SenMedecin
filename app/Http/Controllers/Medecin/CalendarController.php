<?php
/**
 * Created by IntelliJ IDEA.
 * User: EMPRO£
 * Date: 19/12/2020
 * Time: 20:52
 */

namespace App\Http\Controllers\Medecin;


use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function index()
    {
        return view('medecin.calendar');
    }
}
