<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TypeAppointment;
use App\Http\Controllers\Controller;

class PregnacyController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    /**
     * @param Patient $patient
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Patient $patient)
    {
        return view('medecin.patient.createPregnacy', compact('patient'));
    }

    /**
     * @param Request $request
     * @param Patient $patient
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, Patient $patient)
    {
        $this->validate($request, [
            'pregnacy_date' => 'required|date',
            'pregnacy_cpn1' => 'required|date',
            'pregnacy_cpn2' => 'required|date',
            'pregnacy_cpn3' => 'required|date',
            'pregnacy_cpn4' => 'required|date',
            'pregnacy_accouchement' => 'required|date',
        ]);

        $cpn = TypeAppointment::where('libele', 'CPN')->first();
        $acc = TypeAppointment::where('libele', 'Accouchement')->first();
        
        $patient->pregnancies()->create([
            'date' => $request->pregnacy_date,
            'accouchement' => $request->pregnacy_accouchement,
        ]);
        $patient->is_pregnancy = true;
        $patient->save();
        // Fixex les rv
        // For 4 CPN
        $patient->appointments()->create([
            'type_appointment_id' => $cpn->id,
            'description' => 'CPN 1',
            'medecin_id' => $patient->medecin->id,
            'date' => $request->pregnacy_cpn1,
            'passed' => (Carbon::parse($request->pregnacy_cpn1)<=Carbon::now()) ? true : false,
        ]);
        $patient->appointments()->create([
            'type_appointment_id' => $cpn->id,
            'description' => 'CPN 2',
            'medecin_id' => $patient->medecin->id,
            'date' => $request->pregnacy_cpn2,
            'passed' => (Carbon::parse($request->pregnacy_cpn2)<=Carbon::now()) ? true : false,
        ]);
        $patient->appointments()->create([
            'type_appointment_id' => $cpn->id,
            'description' => 'CPN 3',
            'medecin_id' => $patient->medecin->id,
            'date' => $request->pregnacy_cpn3,
            'passed' => (Carbon::parse($request->pregnacy_cpn3)<=Carbon::now()) ? true : false,
        ]);
        $patient->appointments()->create([
            'type_appointment_id' => $cpn->id,
            'description' => 'CPN 4',
            'medecin_id' => $patient->medecin->id,
            'date' => $request->pregnacy_cpn4,
            'passed' => (Carbon::parse($request->pregnacy_cpn4)<=Carbon::now()) ? true : false,
        ]);
        // For Accouchement
        $patient->appointments()->create([
            'type_appointment_id' => $acc->id,
            'description' => 'Accouchement prévisionnel',
            'medecin_id' => $patient->medecin->id,
            'date' => $request->pregnacy_accouchement,
        ]);

        
        session()->flash('success', 'L\'état de grossesse a été enregister avec success');
        return redirect()->route('medecin.patients.show', $patient);
    }
}
