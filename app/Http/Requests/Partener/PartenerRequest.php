<?php

namespace App\Http\Requests\Partener;

use Illuminate\Foundation\Http\FormRequest;

class PartenerRequest extends FormRequest
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
        return [
            'partener_name' => 'required|string|min:2',
            'partener_email' => 'required|email|unique:parteners,email',
            'partener_phone' => 'required|numeric|unique:parteners,phone',
            'partener_address' => 'required|string|min:2',
            'partener_image' => 'required|image|mimes:png,jpg,jpeg',

            'responsable_first_name' => 'required|string|min:2',
            'responsable_last_name' => 'required|string|min:2',
            'responsable_email' => 'required|email|unique:responsables,email',
            'responsable_phone' => 'required|numeric|unique:responsables,phone',
            'responsable_password' => 'required|string|min:8',
            'responsable_gen_password' => 'required|string|min:8',
        ];
    }
}
