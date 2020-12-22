<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $patients = Patient::paginate(25);
        $patientsActive = Patient::active();
        $patientsNotActive = Patient::notActive();
        // dd($patientsNotActive);
        return view('admin.client.index', compact('patients', 'patientsActive', 'patientsNotActive'));
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        if($patient != null){
            $patient->delete();

            session()->flash('success', 'Le client a été supprimé ');
            return redirect()->route('admin.clients.index');
        }

        session()->flash('danger', 'Le client ne peut être supprimer ');
        return redirect()->route('admin.clients.index');
    }

     public function active(Patient $patient)
     {
        $patient->is_active = true;
        $patient->save();

        session()->flash('success', 'Le compte client a été activé');
        return redirect()->route('admin.clients.index');
     }

     public function deactive(Patient $patient)
     {
        $patient->is_active = false;
        $patient->save();

        session()->flash('danger', 'Le compte client a été désactivé');
        return redirect()->route('admin.clients.index');    
     }

}
