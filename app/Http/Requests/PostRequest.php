<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        //Valida el ingreso de datos obligatorios
        return [
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ];
    }
}
