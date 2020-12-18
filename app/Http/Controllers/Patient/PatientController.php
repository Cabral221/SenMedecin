<?php

namespace App\Http\Controllers\Patient;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PatientController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth:patient');
    }

    public function index(){
        return view('patient.index');
    }

    public function profile($id){
        $patient = Patient::where('id',Auth::guard('patient')->user()->id)->first();
        return view('patient.profile.update',compact(Auth::guard('patient')->user()->id));
    }

    public function update( Request $request, $id){

        $validator = $this->validate($request,[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'birthday' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string|confirmed',
        ]);
        $update_profile_complete =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_profile_complete->first_name = $request->first_name;
        $update_profile_complete->last_name = $request->last_name;
        $update_profile_complete->email = $request->email;
        $update_profile_complete->phone = $request->phone;
        $update_profile_complete->birthday = $request->birthday;
        $update_profile_complete->address = $request->address;
        $update_profile_complete->password = Hash::make($request->password);
        $update_profile_complete->save();
        return back();
    }


    public function email( Request $request, $id){

        $validator = $this->validate($request,[
            'email' => 'required|string',
        ]);
        $update_email =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_email->email = $request->email;
        $update_email->save();
        return back();
    }


    public function password( Request $request, $id){
        $validator = $this->validate($request,[
            'password' => 'required|string|confirmed',
            ]);
            // dd($request->password);
        $update_password =Patient::where('id',Auth::guard('patient')->user()->id)->first();
        $update_password->password = Hash::make($request->password);
        $update_password->save();
        return back();
    }
}
