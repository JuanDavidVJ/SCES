<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActaComiteoRequest extends FormRequest
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
            'SC_ActaComite_Codigo' => 'required',
            'SC_ActaComite_Descripcion' => 'required',
            'SC_ActaComite_Estado' => 'required|file',
            'SC_ActaComite_NumeroSolicitud' => 'required',
            'SC_ActaComite_Motivo' => 'required',
            'SC_ActaComite_Testigos' => 'required',
            'SC_ActaComite_EnviarCitacionAntecedentes' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_ActaComite_Codigo.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Descripcion.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Estado.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_NumeroSolicitud.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Motivo.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_Testigos.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_EnviarCitacionAntecedentes.required' => 'Este campo es obligatorio.'
        ];
    }
}
