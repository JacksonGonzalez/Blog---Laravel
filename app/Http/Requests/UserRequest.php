<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Validator\Validator;

class UserRequest extends FormRequest
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
            // se definen las validaciones
            'name' => 'required|min:4|max:120',
            'username' => 'required|min:4|max:120',
            'password' => 'required|min:4|max:100',
            'email' => 'required|min:8|max:250|unique:users'
        ];
    }
}
