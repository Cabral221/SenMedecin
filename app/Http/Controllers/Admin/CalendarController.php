<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use App\Services\Appointment\Appointment;

class CalendarController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $appointments = Appointment::where('date',Carbon::today())->limit(50)->get();
        // dd($appointments);
        $rvs = [];
        foreach($appointments as $appointment){
            $rvs[] = [
                'id' => $appointment->id,
                'start' => $appointment->date->format('Y-m-d H:i:s'),
                'end' => $appointment->date->addHours(1)->format('Y-m-d H:i:s'),
                'title' => $appointment->medecin->responsable->partener->name . ' : (' .$appointment->type() .') : '. $appointment->description,
            ];
        }

        $data =  \json_encode($rvs);
        return view('admin.calendar', compact('data'));
    }

}