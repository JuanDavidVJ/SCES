<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaltasRequest extends FormRequest
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
            'SC_Falta_ApoyoNoSuperado'=> 'required',
            'SC_Falta_EstrategiaNoSuperada'=> 'required',
            'SC_Falta_ActividadesRealizadasAprendiz'=> 'required',
            // 'SC_Falta_UrlDocumentosAnteriores'=> 'required',
            'SC_Falta_ActuacionAprendiz'=> 'required',
            //'SC_TipoFalta_FK_ID'=> 'required',
            //'SC_Reglamento_FK_ID'=> 'required'
        ];
    }
    public function messages()
    {
        return[
            'SC_Falta_ApoyoNoSuperado.required' => 'El campo Apoyo es obligatorio',
            'SC_Falta_EstrategiaNoSuperada.required' => 'El campo Detalles de Estrategia es obligatorio',
            'SC_Falta_ActividadesRealizadasAprendiz.required' => 'Este campo es obligatorio',
             'SC_Falta_ActuacionAprendiz.required'=>'El campo Actuación es obligatorio'
    
        ];
    }

}
