<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvidenciasRequest extends FormRequest
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
            'SC_Evidencias_Descripcion' => 'required',
            'SC_Evidencias_Detalle' => 'required',
            'SC_Evidencias_Archivo' => 'required|file'
            //'SC_Comite_FK_ID'=> 'required',
           // 'SC_PlanMejoramiento_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_Evidencias_Descripcion.required' => 'El campo Descripción es obligatorio',
            'SC_Evidencias_Detalle.required' => 'El campo Detalles de Evidencia es obligatorio',
            'SC_Evidencias_Archivo.required' => 'No ha subido ningún archivo'
        ];
    }
}
