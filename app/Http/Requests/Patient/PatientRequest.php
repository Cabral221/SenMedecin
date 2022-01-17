<?php

namespace App\Http\Requests\Patient;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $now = Carbon::now();
        return [
            'patient_first_name' => 'required|string|min:2',
            'patient_last_name' => 'required|string|min:2',
            'patient_birthday' => 'required|date|after:' . $now->subYears(60),
            'patient_address' => 'required|string|min:2',
            'patient_phone' => 'required|numeric|unique:patients,phone',
            'patient_email' => 'required|email|unique:patients,email',
            'patient_password' => 'required|password|confirmed|min:8',
            'patient_password_confirmation' => 'required|min:8',
            'patient_avatar' => ['image', 'mimes:jpg,jpeg,bmp,svg,png', 'max:5000'],
        ];
    }
}
