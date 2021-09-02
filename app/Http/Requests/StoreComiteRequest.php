<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComiteRequest extends FormRequest
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
            'SC_Comite_DescripcionHechos'=> 'required',
            'SC_Comite_Testigos'=>'required',
            'SC_Comite_Observacion'=> 'required',
            'SC_Usuarios_FK_ID'=> 'required', 
            'SC_Falta_FK_ID'=> 'required',
            'SC_Citacion_FK_ID' =>'required'
           
        ];
    }
    public function messages()
    {
        return [
            //nombre del campo, regla de validacion y asiganmos el mensaje
            'SC_Comite_DescripcionHechos.required' => "La descripcion de los hechos es obligatoria",
            'SC_Comite_Testigos.required' => "Los testigos son obligatorios",
            'SC_Comite_Observacion.required' => "La observacion es obligatoria",
            'SC_Usuarios_FK_ID.required' => "El usuario es obligatorio",
            'SC_Falta_FK_ID.required' => "La falta es obligatoria",
            'SC_Citacion_FK_ID' =>"La Citacion es obligatoria"
        ];
    }
}
