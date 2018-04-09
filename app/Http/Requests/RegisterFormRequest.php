<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'name'=>"required|string|max:50",
            'email'=>"required|string|email|unique:users",
            'username'=>"required|string|unique:users",
            'city'=>"nullable|string|max:30",
            'contact'=>"nullable|string|max:30",
            'password'=>"required|string|min:8|max:10|confirmed",
        ];
    }
}
