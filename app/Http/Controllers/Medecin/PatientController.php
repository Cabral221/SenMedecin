<?php

namespace App\Http\Controllers\Medecin;

use Carbon\Carbon;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Patient\PatientRequest;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function index() : View
    {
        $patients = $this->medecin()->patients()->orderBy('id','DESC')->get();
        $patientActives = $this->medecin()->patients()->where('is_active',true)->get();
        $medecin = $this->medecin();
        return view('medecin.patient.index', compact('medecin','patients','patientActives'));
    }

    public function show(Patient $patient) : View
    {
        $lastRvs = $patient->appointments()->orderBy('date', 'ASC')->limit(5)->get();
        $antecedent = $patient->antecedent;
        return view('medecin.patient.show', compact('patient', 'lastRvs', 'antecedent'));
    }

    public function create() : View
    {
        $patient = new Patient;
        return view('medecin.patient.create', compact('patient'));
    }

    public function store(PatientRequest $request) : RedirectResponse
    {
        /** @var Patient $patient */
        $patient = $this->medecin()->patients()->create([
            'first_name' => ucfirst($request->patient_first_name),
            'last_name' => ucfirst($request->patient_last_name),
            'birthday' => $request->patient_birthday,
            'address' => $request->patient_address,
            'phone' => $request->patient_phone,
            'email' => $request->patient_email,
            'password' => Hash::make($request->patient_password),
            'is_pregnancy' => $request->patient_is_pregnancy,
        ]);

        if($request->hasFile('patient_avatar')) {
            /** @var UploadedFile */
            $file = $request->file('patient_avatar');
            $patient->prepareAvatar($file);
        }
        
        session()->flash('success', 'La patiente a été enregistée avec succés !');
        return redirect()->route('medecin.patients.index');
    }

    public function edit(Patient $patient) : View
    {
        return view('medecin.patient.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient) : RedirectResponse
    {
        $now = Carbon::now();
        $this->validate($request, [
            'patient_first_name' => 'required|string|min:2',
            'patient_last_name' => 'required|string|min:2',
            'patient_birthday' => 'required|date|after:' . $now->subYears(60),
            'patient_address' => 'required|string|min:2',
        ]);

        $patient->update([
            'first_name' => ucfirst($request->patient_first_name),
            'last_name' => ucfirst($request->patient_last_name),
            'birthday' => $request->patient_birthday,
            'address' => $request->patient_address,
        ]);

        session()->flash('success', 'Les modifications ont été enregistée avec succés !');
        return redirect()->route('medecin.patients.index');
    }

    public function destroy(Patient $patient) : RedirectResponse
    {
        $patient->delete();

        session()->flash('danger', 'La patiente a été supprimer de cette plateform');
        return redirect()->route('medecin.patients.index');
    }

    public function calendar(Patient $patient) : View
    {
        $appointments = $patient->appointments()->orderBy('date', 'DESC')->paginate(30);
        return view('medecin.patient.calendar', compact('patient','appointments'));
    }

    public function medecin() : Medecin
    {
        return auth('medecin')->user();
    }

}
