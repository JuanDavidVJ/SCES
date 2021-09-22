<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecursosRequest extends FormRequest
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
            'SC_Recursos_FechaGenerado' => 'required',
            'SC_Recursos_FechaLimite' => 'required',
            'SC_Recursos_Radicado' => 'required',
            //'SC_Recursos_Evidencias' => 'required',
            'SC_ActaComite_FK' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'SC_Recursos_FechaGenerado.required' => 'Este campo es obligatorio.',
            'SC_Recursos_FechaLimite.required' => 'Este campo es obligatorio.',
            'SC_Recursos_Radicado.required' => 'Este campo es obligatorio.',
           // 'SC_Recursos_Evidencias.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_FK.required' => 'Este campo es obligatorio'
        ];
    }
}
