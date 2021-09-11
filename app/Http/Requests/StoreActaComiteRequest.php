<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActaComiteRequest extends FormRequest
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
            'Nombre' => 'required',
            'Ciudad' => 'required',
            'Fecha' => 'required',
            'HoraInicio' => 'required',
            'HoraFin' => 'required',
            'Asistente' => 'required',
            'DeclaracionA' => 'required',
            'DeclaracionO' => 'required',
            'Desicion' => 'required',
            
            'DeclaracionR' => 'required',
            'Citacion' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'Nombre.required' => 'Este campo es obligatorio.',
            'Ciudad.required' => 'Este campo es obligatorio.',
            'Fecha.required' => 'Este campo es obligatorio.',
            'HoraInicio.required' => 'Este campo es obligatorio.',
            'HoraFin.required' => 'Este campo es obligatorio.',
            'Asistente.required' => 'Este campo es obligatorio.',
            'DeclaracionA.required' => 'Este campo es obligatorio.',
            'DeclaracionO.required' => 'Este campo es obligatorio.',
            'Desicion.required' => 'Este campo es obligatorio.',
            
            'DeclaracionR.required' => 'Este campo es obligatorio.',
            'Citacion.required' => 'Este campo es obligatorio.'
        ];
    }
}
