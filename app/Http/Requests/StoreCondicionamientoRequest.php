<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCondicionamientoRequest extends FormRequest
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
            'SC_CondicionamientoMatricula_Descripcion' => 'required',
            'SC_CondicionamientoMatricula_Fecha' => 'required',
            'SC_CondicionamientoMatricula_FechaMaxima' => 'required',
            'SC_CondicionamientoMatricula_EvidenciasNoPresentadas' => 'required',
            'SC_Acto_Administrativo_FK_ID' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'SC_CondicionamientoMatricula_Descripcion.required' => 'Este campo es obligatorio.',
            'SC_CondicionamientoMatricula_Fecha.required' => 'Debe ingresar una fecha.',
            'SC_CondicionamientoMatricula_FechaMaxima.required' => 'Debe ingresar una fecha máxima.',
            'SC_CondicionamientoMatricula_EvidenciasNoPresentadas.required' => 'Este campo es obligatorio.',
            'SC_Acto_Administrativo_FK_ID.required' => 'Este campo es obligatorio.',
        ];
    }
}
