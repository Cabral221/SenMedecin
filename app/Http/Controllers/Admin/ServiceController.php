<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ServiceController extends Controller
{
    
    public function index() : View
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'service_libele' => 'required|string|min:2|unique:services,libele',
        ]);

        Service::create(['libele' => $request->service_libele]);

        session()->flash('success', 'Le service a été créé avec succés !');

        return redirect()->route('admin.services.index');
    }

    public function update(Request $request, Service $service) : RedirectResponse
    {
        $this->validate($request, [
            'service_libele' => 'required|string|min:2|unique:services,libele',
        ]);

        $service->update([
            'libele' => $request->service_libele
        ]);
        
        //  Session flash message
        session()->flash('success', 'Le service a été modifié avec succés !');
        
        return redirect()->route('admin.services.index');
    }

    public function destroy(Service $service) : RedirectResponse
    {
        // dd($service);
        $service->delete();

        // Session flash message 
        session()->flash('danger', 'Le service a été supprimé !');

        return redirect()->route('admin.services.index');
    }

}
