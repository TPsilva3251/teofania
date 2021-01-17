<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
            'name'      =>'required|min:3|max:100',
        ];

    }

    public function messages()
    {
        return [
            'name.required'     => 'O campo nome deve ser preenchido.',
            'name.min'          => 'O nome deve ter pelo menos 3 digitos.',
            'name.max'          => 'O nome não deve ter no máximo 100 digitos.',
        ];
    }
}
