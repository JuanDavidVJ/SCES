<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNovedadesRequest extends FormRequest
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
            'SC_Novedades_Fecha'=> 'required',
            'SC_Aprendiz_FK_ID' => 'required',
            'SC_TipoNovedades_FK_ID' => 'required',
            'SC_Novedades_Motivo'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'SC_Novedades_Fecha.required' => 'El campo fecha es obligatorio.',
            'SC_Aprendiz_FK_ID.required' => 'Este campo es obligatorio.',
            'SC_TipoNovedades_FK_ID.required' => 'Este campo es obligatorio.',
            'SC_Novedades_Motivo.required' => 'El campo motivo es obligatorio.',
        ];
    }
}
