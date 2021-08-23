<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstimuloRequest extends FormRequest
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
            'SC_Estimulos_Reconocimiento' => 'required',
            'SC_Estimulos_DescripcionEstimulo' => 'required',
            'SC_Estimulos_Fecha' => 'required',
            'SC_Aprendiz_FK_ID'=> 'required',
            'SC_TipoEstimulos_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_Estimulos_Reconocimiento.required' => 'Este campo es obligatorio.',
            'SC_Estimulos_DescripcionEstimulo.required' => 'Este campo es obligatorio.',
            'SC_Estimulos_Fecha.required' => 'La fecha es requerida.',
            'SC_Aprendiz_FK_ID.required' => 'Este campo es obligatorio.',
            'SC_TipoEstimulos_FK_ID.required' => 'Este campo es obligatorio.'
        ];
    }
}
