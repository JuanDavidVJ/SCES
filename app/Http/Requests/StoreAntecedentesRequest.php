<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAntecedentesRequest extends FormRequest
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
            'SC_Antecedentes_Descripcion' => 'required',
            'SC_Antecedentes_HabilidadesDestrezas' => 'required',
            'SC_Antecedentes_Observaciones' => 'required|file',
            'SC_Antecedentes_Fecha' => 'required',
            'SC_Antecedentes_Foto' => 'required|image',
            'SC_Aprendiz_FK_ID' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'SC_Antecedentes_Descripcion.required' => 'Este campo es obligatorio.',
            'SC_Antecedentes_HabilidadesDestrezas.required' => 'Este campo es obligatorio.',
            'SC_Antecedentes_Observaciones.required' => 'Este campo es obligatorio.',
            'SC_Antecedentes_Fecha.required' => 'La fecha es requerida.',
            'SC_Antecedentes_Foto.required' => 'No ha adjuntado ningún archivo.',
            'SC_Aprendiz_FK_ID.required' => 'La fecha es requerida.',
        ];
    }
}
