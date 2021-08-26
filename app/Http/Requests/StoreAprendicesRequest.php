<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAprendicesRequest extends FormRequest
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
            'SC_Aprendiz_Nombres' => 'required',
            'SC_Aprendiz_Apellidos' => 'required',
            'SC_Aprendiz_Documento' => 'required',
            'SC_Aprendiz_Correo' => 'required',
            //'SC_Aprendiz_NumeroContacto' => 'required',
            'SC_Ficha_PK_ID' => 'required'
            // 'SC_Aprendiz_ContratoAprendizaje' => 'required',
            // 'SC_Aprendiz_Empresa' => 'required',
            //'SC_Comite_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_Aprendiz_Nombres.required' => 'Este campo es obligatorio.',
            'SC_Aprendiz_Apellidos.required' => 'Este campo es obligatorio.',
            'SC_Aprendiz_Documento.required' => 'Este campo es obligatorio.',
            'SC_Aprendiz_Correo.required' => 'Este campo es obligatorio.',
            //'SC_Aprendiz_NumeroContacto.required' => 'Este campo es obligatorio.',
            'SC_Ficha_PK_ID.required' => 'Este campo es obligatorio.'
            // 'SC_Aprendiz_ContratoAprendizaje.required' => 'Este campo es obligatorio.',
            // 'SC_Aprendiz_Empresa.required' => 'Este campo es obligatorio.',
            //'SC_Comite_FK_ID.required' => 'Este campo es obligatorio.'
        ];
    }
}
