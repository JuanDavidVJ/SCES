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
            'SC_Novedades_Descripcion' => 'required',
            'SC_Novedades_HabilidadesDestrezas' => 'required',
            'SC_Novedades_Observaciones' => 'required|file',
            'SC_Novedades_Fecha'=> 'required',
            'SC_Aprendiz_FK_ID' => 'required',
            'SC_TipoNovedades_FK_ID' => 'required',
            'SC_Novedades_Foto' => 'required|image'
        ];
    }

    public function messages()
    {
        return[
            'SC_Novedades_Descripcion.required' => 'El campo Descripción es obligatorio.',
            'SC_Novedades_HabilidadesDestrezas.required' => 'Este campo es obligatorio.',
            'SC_Novedades_Observaciones.required' => 'Este campo es obligatorio.',
            'SC_Novedades_Fecha.required' => 'El campo fecha es obligatorio.',
            'SC_Aprendiz_FK_ID.required' => 'Este campo es obligatorio.',
            'SC_TipoNovedades_FK_ID.required' => 'Este campo es obligatorio.',
            'SC_Novedades_Foto.required' => 'No ha subido ningún archivo.'
        ];
    }
}
