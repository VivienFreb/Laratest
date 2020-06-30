<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Identité/Droits de l'émetteur
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
            'name' => 'required|min:5|max:20|alpha',
            'mail' => 'required|email',
            'text' => 'required|max:250',
            'tos' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Custom error : name must be between 5 and 20 characters !',
            'tos.accepted' => 'Terms Of Service must be accepted ! ',
        ];
    }
}
