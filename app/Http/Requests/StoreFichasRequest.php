<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFichasRequest extends FormRequest
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
            'SC_Ficha_FechaInicio' => 'required',
            'SC_Ficha_NumeroFicha' => 'required',
            'SC_Ficha_FechaFin' => 'required',
            'SC_Ficha_NombreProgramaFormacion' => 'required'
        ];
    }

    // MENSAJES PERSONALIZADOS

    public function messages()
    {
        return[
            'SC_Ficha_FechaInicio.required' => 'Debe ingresar la fecha de inicio.',
            'SC_Ficha_NumeroFicha.required' => 'El campo número de ficha es obligatorio.',
            'SC_Ficha_FechaFin.required' => 'Debe ingresar la fecha de finalización.',
            'SC_Ficha_NombreProgramaFormacion.required' => 'El campo Nombre del Programa es obligatorio.'
        ];
    }
}
