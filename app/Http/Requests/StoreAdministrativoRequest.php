<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdministrativoRequest extends FormRequest
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
            'SC_ActoAdministrativoSanciones_DescripcionHechos' => 'required',
            'SC_ActoAdministrativoSanciones_PresentaDescargos' => 'required',
            'SC_ActoAdministrativoSanciones_Pruebas' => 'required|file',
            'SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor' => 'required',
            'SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion' => 'required',
            'SC_ActoAdministrativoSanciones_Fecha' => 'required',
            'SC_Comite_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_ActoAdministrativoSanciones_DescripcionHechos.required' => 'Este campo es obligatorio.',
            'SC_ActoAdministrativoSanciones_PresentaDescargos.required' => 'Este campo es obligatorio.',
            'SC_ActoAdministrativoSanciones_Pruebas.required' => 'Debe adjuntar las pruebas.',
            'SC_ActoAdministrativoSanciones_GradoResponsabilidadAutor.required' => 'Este campo es obligatorio.',
            'SC_ActoAdministrativoSanciones_NumeroLLamadosAtencion.required' => 'Este campo es obligatorio.',
            'SC_ActoAdministrativoSanciones_Fecha.required' => 'La fecha es requerida.',
            'SC_Comite_FK_ID.required' => 'Este campo es obligatorio.'
        ];
    }
}
