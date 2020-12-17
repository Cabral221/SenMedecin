<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Patient;
use App\Models\Antecedent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AntecedentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function create(Patient $patient)
    {
        $antecedent = new Antecedent;
        return view('medecin.patient.createAntecedent', compact('patient','antecedent'));
    }

    public function store(Request $request, Patient $patient)
    {
        $this->validate($request, [
            'antecedent_father' => 'string|min:2',
            'antecedent_mother' => 'string|min:2',
            'antecedent_family' => 'string|min:2',
            'antecedent_other_exam' => 'string|min:2',
            'antecedent_treating' => 'string|min:2',
        ]);

        $patient->antecedent()->create([
            'father' => $request->antecedent_father,
            'mother' => $request->antecedent_mother,
            'family' => $request->antecedent_family,
            'other_exam' => $request->antecedent_other_exam,
            'treating' => $request->antecedent_treating, 
        ]);

        session()->flash('success', 'Les antécedents sont enregistrés avec success');
        return redirect()->route('medecin.patients.show', $patient);
    }

    public function edit(Patient $patient, Antecedent $antecedent)
    {
        return view('medecin.patient.editAntecedent', compact('patient', 'antecedent'));
    }

    public function update(Request $request, Patient $patient)
    {

        $this->validate($request, [
            'antecedent_father' => 'string|min:2',
            'antecedent_mother' => 'string|min:2',
            'antecedent_family' => 'string|min:2',
            'antecedent_other_exam' => 'string|min:2',
            'antecedent_treating' => 'string|min:2',
        ]);

        $patient->antecedent->update([
            'father' => $request->antecedent_father,
            'mother' => $request->antecedent_mother,
            'family' => $request->antecedent_family,
            'other_exam' => $request->antecedent_other_exam,
            'treating' => $request->antecedent_treating, 
        ]);

        session()->flash('success', 'Les antécedents ont été modifiés avec success ');
        return redirect()->route('medecin.patients.show', $patient);
    }

}