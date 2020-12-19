<?php
/**
 * Created by IntelliJ IDEA.
 * User: EMPRO£
 * Date: 19/12/2020
 * Time: 13:49
 */

namespace App\Http\Controllers\Medecin;


use App\Http\Controllers\Controller;
use App\Models\Medecin;
use App\Services\Appointment\Appointment;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function day()
    {
        $now = Carbon::now();
        $appointments = [];
        $appointmentDay = $this->appointmentsWherePassed(false);
        foreach ($appointmentDay as $appoint){
            if($appoint->date->diffInDays($now) === 0){
                $appointments[] = $appoint;
            }
        }
        return view('medecin.appointment.day', compact('appointments'));
    }

    public function come()
    {
        $appointments = $this->appointmentsWherePassed(false);
        return view('medecin.appointment.come', compact('appointments'));
    }

    public function histories()
    {
        $appointments = $this->appointmentsWherePassed(true);
        return view('medecin.appointment.histories', compact('appointments'));
    }

    public function show(Appointment $appointment)
    {
        dd($appointment);
        return view('medecin.appointment.show', compact('appointment'));
    }

    public function medecin() : Medecin
    {
        return auth('medecin')->user();
    }

    private function appointmentsWherePassed(bool $bool)
    {
        return $this->medecin()->appointments()->where('passed', $bool)->orderBy('date','ASC')->get();
    }

}
