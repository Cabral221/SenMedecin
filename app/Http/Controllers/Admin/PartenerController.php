<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Partener;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Partener\PartenerRequest;
use App\Http\Requests\Partener\PartenerEditRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartenerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index() : View
    {
        $parteners = Partener::where('is_active', true)->get();
        return view('admin.partener.index', compact('parteners'));
    }

    public function show(Partener $partener) : View
    {
        $responsable = $partener->responsable;
        $medecins = $responsable->medecins;
        $nbPatients = 0;
        foreach($medecins as $medecin){
            $nbPatients += $medecin->patients()->count();
        }
        return view('admin.partener.show', compact('partener', 'responsable', 'medecins', 'nbPatients'));
    }

    public function create() : View
    {
        $partener = new Partener;
        $responsable = $partener->responsable;
        $services = Service::all();
        return view('admin.partener.create', compact('partener', 'services'));
    }

    public function store(PartenerRequest $request) : RedirectResponse
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
        
        session()->flash('success', 'Le partenaire a été ajouté avec succés');

        return redirect()->route('admin.parteners.index');
        
    }

    public function edit(Partener $partener) : View
    {
        $services = Service::all();
        return view('admin.partener.edit', compact('partener', 'services'));
    }

    public function update(PartenerEditRequest $request, Partener $partener) : RedirectResponse
    {
        // Validate Unique Email and Phone
        $UniqueEmail = Partener::where('id', '!=', $partener->id)->whereEmail($request->partener_email)->first();
        $UniquePhone = Partener::where('id', '!=', $partener->id)->wherePhone($request->partener_phone)->first();
        if($UniqueEmail != null || $UniquePhone != null){
            if($UniqueEmail != null && $UniquePhone != null){
                return redirect()->back()->withErrors([
                    'partener_email' => 'Cet email est déjà utilisé',
                    'partener_phone' => 'Ce numéro est déjà utilisé'
                ]);
            }else {
                if($UniqueEmail != null){
                    return redirect()->back()->withErrors([
                        'partener_email' => 'Cet email est déjà utilisé',
                    ]);
                }
                 if($UniquePhone != null){
                    return redirect()->back()->withErrors([
                        'partener_phone' => 'Ce numéro est déjà utilisé',
                    ]);
                }
            }
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

        session()->flash('Les modifications ont été enregistré avec succés');
        
        return redirect()->route('admin.parteners.show', $partener);
    }
    
    public function destroy(Partener $partener) : RedirectResponse
    {
        $partener->delete();

        session()->flash('success', 'Le partenaire a été supprimé');
        return redirect()->route('admin.parteners.index');
    }
}