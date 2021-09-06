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
            'SC_ActaComite_Nombre' => 'required',
            'SC_ActaComite_Ciudad' => 'required',
            'SC_ActaComite_Fecha' => 'required',
            'SC_ActaComite_HoraInicio' => 'required',
            'SC_ActaComite_HoraFin' => 'required',
            'SC_ActaComite_Asistentes' => 'required',
            'SC_ActaComite_DeclaracionesAprendiz' => 'required',
            'SC_ActaComite_DeclaracionesOtros' => 'required',
            'SC_ActaComite_Decision' => 'required',
            'SC_ActaComite_Descargos' => 'required',
            'SC_ActaComite_DeclaracionesResponsable' => 'required',
            'SC_Citacion_FK' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_ActaComite_Nombre.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Ciudad.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Fecha.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_HoraInicio.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_HoraFin.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Asistentes.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_DeclaracionesAprendiz.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_DeclaracionesOtros.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Decision.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Descargos.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_DeclaracionesResponsable.required' => 'Este campo es obligatorio.',
            'SC_Citacion_FK.required' => 'Este campo es obligatorio.'
        ];
    }
}
