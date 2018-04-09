<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
           'name'=>"required|string|min:3",
            'email'=>"required|string|email",
           'message'=>"required|string|min:10",

        ];
    }
      public function messages()
    {
        return [
           'name.required'=>"Votre nom est obligatoire",
           'name.min'=>"Votre nom doit etre au minimum :min caratères",
           'email.required'=>"Veuillez renseigner votre email.",
           'email.email'=>"Votre email n'est pas valide",
           'message.required'=>"Votre message est obligatoire",
           'message.min'=>"Votre message doit etre au minimum :min caratères",

        ];
    }
}
