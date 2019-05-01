<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAdminRequest extends FormRequest
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
            'title'         =>      'required',
            'subtitle'      =>      'required',
            'post_1'        =>      'required',
            'post_2'        =>      'required',
            'post_3'        =>      'required',
            'post_4'        =>      'required',
        ];
    }
}
