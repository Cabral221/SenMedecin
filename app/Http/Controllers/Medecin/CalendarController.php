<?php
/**
 * Created by IntelliJ IDEA.
 * User: EMPRO£
 * Date: 19/12/2020
 * Time: 20:52
 */

namespace App\Http\Controllers\Medecin;


use App\Models\Medecin;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function index()
    {
        $appointments = $this->medecin()->appointments;
        $rvs = [];
        foreach($appointments as $appointment){
            $rvs[] = [
                'id' => $appointment->id,
                'start' => $appointment->date->format('Y-m-d H:i:s'),
                'end' => $appointment->date->addHours(1)->format('Y-m-d H:i:s'),
                'title' => $appointment->type() .': '. $appointment->description,
            ];
        }

        $data =  \json_encode($rvs);
        
        return view('medecin.calendar', compact('data'));
    }

    public function medecin(): Medecin
    {
        return auth('medecin')->user();
    }
}
