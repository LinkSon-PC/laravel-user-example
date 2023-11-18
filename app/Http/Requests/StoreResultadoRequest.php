<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //cambiar a true
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
            'nombre' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio'
        ];
    }

    public function attributes():array
    {
        return [
            'nombre' => 'Tipo de Resultado'
        ];
    }
}
