<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Partener;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Partener\PartenerRequest;
use App\Http\Requests\Partener\PartenerEditRequest;

class PartenerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $parteners = Partener::where('is_active', true)->get();
        return view('admin.partener.index', compact('parteners'));
    }

    public function show(Partener $partener)
    {
        $responsable = $partener->responsable;
        $medecins = $responsable->medecins;
        $nbPatients = 0;
        foreach($medecins as $medecin){
            $nbPatients += $medecin->patients()->count();
        }
        return view('admin.partener.show', compact('partener', 'responsable', 'medecins', 'nbPatients'));
    }

    public function create()
    {
        $partener = new Partener;
        $responsable = $partener->responsable;
        $services = Service::all();
        return view('admin.partener.create', compact('partener', 'services'));
    }

    public function store(PartenerRequest $request)
    {
        $partener = new Partener();

        if($request->partener_image == null){
            $partener->image = '/image/partenerDefeault.jpg';  
        }else{
            $partener->upLoadFile($request->partener_image);
        }

        $partener->name     = $request->partener_name;
        $partener->email    = $request->partener_email;
        $partener->phone    = $request->partener_phone;
        $partener->address  = $request->partener_address;
        $partener->save();

        // Sync service
        if(count($request->services) > 0){
            $partener->services()->attach($request->services);
        }

        $partener->responsable()->create([
            'first_name' => $request->responsable_first_name,
            'last_name' => $request->responsable_last_name,
            'email' => $request->responsable_email,
            'phone' => $request->responsable_phone,
            'password' => Hash::make($request->responsable_password),
            'gen_password' => Hash::make($request->responsable_gen_password),
        ]);
        // \session(['message' => 'Le partenaire a été ajouter avec success']);

        return \redirect()->route('admin.parteners.index');
        
    }

    public function edit(Partener $partener)
    {
        $services = Service::all();
        return view('admin.partener.edit', compact('partener', 'services'));
    }

    public function update(PartenerEditRequest $request, Partener $partener)
    {
        // Validate Unique Email and Phone
        $UniqueEmail = Partener::where('id', '!=', $partener->id)->whereEmail($request->partener_email)->first();
        $UniquePhone = Partener::where('id', '!=', $partener->id)->wherePhone($request->partener_phone)->first();
        if($UniqueEmail != null || $UniquePhone != null){
            dd('errors unique', $UniqueEmail, $UniquePhone);
            // Return with errors
        }
        
        if($request->partener_image != null){
            // Remove old image
            $partener->deleteFile();
            // upload new image
            $partener->upLoadFile($request->partener_image);
        }
        // Sync Services
        if(count($request->services) > 0){
            $partener->services()->sync($request->services);
        }
        // Update partener info rest
        $partener->name     = $request->partener_name;
        $partener->email    = $request->partener_email;
        $partener->phone    = $request->partener_phone;
        $partener->address  = $request->partener_address;
        $partener->save();

        // Seesion flash
        // ...
        
        return redirect()->route('admin.parteners.show', $partener);
    }
    
    public function destroy(Partener $partener)
    {
        $partener->is_active = false;
        $partener->save();

        // Session flash

        return redirect()->route('admin.parteners.index');
    }
}