<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'log'=>"required|string",
            'password'=>"required|string|min:8",
        ];
    }

      public function messages(){
        return[
        'log.required'=>"Identifiant est requis",
        'password.required'=>"Mot de passe est requis",
    ];
    }
}

