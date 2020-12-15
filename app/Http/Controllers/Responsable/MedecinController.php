<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Medecin;
use App\Models\Responsable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth:responsable');
    }

    public function index()
    {
        $medecins = [];
        $allMedecins = $this->responsable()->medecins;
        foreach($allMedecins as $medecin){
            if($medecin->is_active == 1) $medecins = array_merge($medecins, [$medecin]);
        }

        return view('responsable.agent.index', compact('medecins'));
    }
    
    public function show(Medecin $medecin)
    {
        return view('responsable.agent.show', compact('medecin'));
    }

    public function create()
    {
        $medecin = new Medecin;
        $services = $this->responsable()->partener->services;
        return view('responsable.agent.create', compact('medecin','services'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'medecin_first_name' => 'required|string|min:2',
            'medecin_last_name' => 'required|string|min:2',
            'medecin_phone' => 'required|numeric',
            'medecin_email' => 'required|email|unique:medecins,email',
            'medecin_password' => 'required|string|min:8',
            'medecin_gen_password' => 'required|string|min:8',
            'medecin_service' => 'required|numeric',
        ]);

        if ($request->medecin_service == null) {
            return redirect()->back()->withInput()->withErrors(['medecin_service' => 'Veuillez assigner un service pour cet agent !']);
        }

        $medecin = $this->responsable()->medecins()->create([
            'first_name' => $request->medecin_first_name,
            'last_name' => $request->medecin_last_name,
            'phone' => $request->medecin_phone,
            'email' => $request->medecin_email,
            'password' => Hash::make($request->medecin_password),
            'gen_password' => Hash::make($request->medecin_gen_password),
            'service_id' => $request->medecin_service,
        ]);

        session()->flash('success', 'L\'agent a été ajouté avec succés !');
        return redirect()->route('responsable.medecins.index');
    }

    public function edit(Medecin $medecin)
    {
        $services = $this->responsable()->partener->services;
        return view('responsable.agent.edit', compact('medecin', 'services'));
    }

    public function update(Request $request, Medecin $medecin)
    {
        // Valider les données
        $this->validate($request, [
            'medecin_first_name' => 'required|string|min:2',
            'medecin_last_name' => 'required|string|min:2',
            'medecin_phone' => 'required|numeric',
            'medecin_service' => 'required|numeric',
        ]);

        if ($request->medecin_service == null) {
            return redirect()->back()->withInput()->withErrors(['medecin_service' => 'Veuillez assigner un service pour cet agent !']);
        }
        // Modifier le medecin
        $medecin->update([
            'first_name' => $request->medecin_first_name,
            'last_name' => $request->medecin_last_name,
            'phone' => $request->medecin_phone,
            'service_id' => $request->medecin_service,
        ]);

        // redirect page with success
        session()->flash('success', 'Les modifications ont bien été prises en compte !');
        return redirect()->route('responsable.medecins.show', $medecin);
    }

    public function destroy(Medecin $medecin)
    {
        $medecin->delete();

        session()->flash('success', 'L\'agent a été supprimer.');
        return redirect()->route('responsable.medecins.index');
    }

    public function responsable(): Responsable
    {
        return auth('responsable')->user();
    }
}
