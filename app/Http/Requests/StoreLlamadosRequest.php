<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLlamadosRequest extends FormRequest
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
            'SC_Llamado_Atencion_Descripcion' => 'required',
            'SC_Llamado_Atencion_Fecha' => 'required',
            'SC_Llamado_Atencion_EvidenciasNoPresentadas' => 'required',
            'SC_ActoAdministrativoSanciones_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'SC_Llamado_Atencion_Descripcion.required' => 'Este campo es obligatorio.',
            'SC_Llamado_Atencion_Fecha.required' => 'El Campo Fecha es obligatorio.',
            'SC_Llamado_Atencion_EvidenciasNoPresentadas.required' => 'Este campo es obligatorio.',
            'SC_ActoAdministrativoSanciones_FK_ID.required' => 'Este campo es obligatorio.'
        ];
    }
}
