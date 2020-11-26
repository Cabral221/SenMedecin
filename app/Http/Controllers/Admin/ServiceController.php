<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'service_libele' => 'required|string|min:2|unique:services,libele',
        ]);

        Service::create(['libele' => $request->service_libele]);

        // Session flash message 

        return redirect()->route('admin.services.index');
    }

    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'service_libele' => 'required|string|min:2|unique:services,libele',
        ]);

        if($validator->fails()){
            dd($validator->errors());
            // Return error session flash

        }

        $service->update([
            'libele' => $request->service_libele
        ]);
        
        //  Session flash message
        
        return redirect()->route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        // dd($service);
        $service->delete();

        // Session flash message 

        return redirect()->route('admin.services.index');
    }

}
