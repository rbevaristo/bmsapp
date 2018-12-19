<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string',
            'contact' => 'required|regex:/(09)[0-9]{9}/|max:11',
            'email' => 'required|email',
            'houseNumber' => 'nullable|string',
            'street' => 'nullable|string',
            'barangay' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'postalCode' => 'nullable|numeric'
        ];
    }
}
