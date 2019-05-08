<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryPostRequest extends FormRequest
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
            'category'      =>      'required|unique'
        ];
    }

    public function messages()
    {

        return [
            'category.required'     =>      'Campo categoria obrigatoria!',
            'category.unique'       =>      'Essa Categoria já existe!'
        ];

    }
}
