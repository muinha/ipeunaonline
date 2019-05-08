<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateAdminRequest extends FormRequest
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
            'name'      =>      'required|string',
            'email'     =>      'required|email',
            'login'     =>      'required',
            'password'  =>      'required'
        ];
    }
    
    public function messages()
    {

        return [
            'name.required'     =>      'Campo nome é obrigatorio!',
            'name.string'       =>      'Campo deve ser somente letras!',
            'email.required'    =>      'Campo email é obrigatorio!',
            'email.email'       =>      'Insira um email valido!',
            'login.required'    =>      'Campo login é obrigatorio',
            'password.required' =>      'Campo password é obrigatorio'
        ];

    }
}
