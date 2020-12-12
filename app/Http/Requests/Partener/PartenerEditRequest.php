<?php

namespace App\Http\Requests\Partener;

use Illuminate\Foundation\Http\FormRequest;

class PartenerEditRequest extends FormRequest
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
            'partener_email' => 'required|email',
            'partener_phone' => 'required|numeric',
            'partener_address' => 'required|string|min:2',
            'partener_image' => 'image|mimes:png,jpg,jpeg',
        ];
    }
}
