<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEstudianteRequest extends FormRequest
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
        $cui_pasaporte = $this->input('cui_pasaporte');
        $nov = $this->input('nov');

        return [
            'cui_pasaporte' => ['required', Rule::unique('estudiante')->ignore($cui_pasaporte, 'cui_pasaporte'), 'size:13'],
            'nombres_completos' => 'required',
            'apellidos_completos' => 'required',
            'nov' => ['required', Rule::unique('estudiante')->ignore($nov, 'nov'), 'size:10'],
            'correo' => ['required','email'],
            'fecha_nacimiento' => ['required','date','before_or_equal:today'],
        ];
    }
    
    public function messages()
    {
        return [
            'cui_pasaporte.unique:estudiante' => 'El CUI o Pasaporte ya ha sido tomado.',
            'cui_pasaporte.required' => 'El campo cui_pasaporte es obligatorio.',
            'nov.unique:estudiante' => 'El nov ya ha sido tomado.',
            'nov.required' => 'El campo nov es obligatorio.',
            'nombres_completos.required' => 'El campo nombres completos es obligatorio.'
        ];
    }
}
