<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Patient;
use App\Models\Children;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ChildController extends Controller {

    public function __construct()
    {
        $this->middleware('auth:medecin');
    }

    public function index(Patient $patient) : View
    {
        return view('medecin.patient.child', compact('patient'));
    }

    public function show(Patient $patient, Children $children) : View
    {
        return view('medecin.patient.childShow', compact('patient','children'));
    }

    public function create(Patient $patient) : View
    {
        return view('medecin.patient.childCreate', compact('patient'));
    }

    public function store(Request $request, Patient $patient) : RedirectResponse
    {
        $this->validate($request, [
            'children_first_name' => 'required|min:2',
            'children_last_name' => 'required|min:2',
            'children_birthday' => 'required|date',
            'children_genre' => 'required|string',
        ]);

        $patient->childrens()->create([
            'first_name' => $request->children_first_name,
            'last_name' => $request->children_last_name,
            'birthday' => $request->children_birthday,
            'genre' => $request->children_genre,
        ]);

        session()->flash('success', 'L\'enfant a été ajouter avec succés');
        return redirect()->route('medecin.patients.childs', $patient);
    }

    public function update(Request $request, Patient $patient, Children $children) : RedirectResponse
    {
        $this->validate($request, [
            'children_first_name' => 'required|min:2',
            'children_last_name' => 'required|min:2',
            'children_birthday' => 'required|date',
        ]);
            
        $children->update([
            'first_name' => $request->children_first_name,
            'last_name' => $request->children_last_name,
            'birthday' => $request->children_birthday,
        ]);

        session()->flash('success', 'Les informations ont été modifié avec success');
        return redirect()->route('medecin.patients.childs', $patient);
    }

    public function destroy(Request $request, Patient $patient, Children $children) : RedirectResponse
    {
        $children->delete();

        session()->flash('danger', 'L\'enregistrement a été supprimé avec succés !');
        return redirect()->route('medecin.patients.childs', $patient);
    }

}
