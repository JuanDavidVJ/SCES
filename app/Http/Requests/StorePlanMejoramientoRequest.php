<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanMejoramientoRequest extends FormRequest
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
            'SC_PlanMejoramiento_Descripcion'=> 'required',
            'SC_PlanMejoramiento_Fecha'=> 'required',
            'SC_PlanMejoramiento_FechaMaxima'=> 'required',
            'SC_ActoAdministrativo_FK_ID'=> 'required'
            #'SC_TipoNovedades_FK_ID'=> 'required'
            #'SC_PlanMejoramiento'=> 'required', 
        ];
    }
    public function messages()
    {
        return [
            //nombre del campo, regla de validacion y asiganmos el mensaje
            'SC_PlanMejoramiento_Descripcion.required' => "La descripcion es obligatoria",
            'SC_PlanMejoramiento_Fecha.required' => "La fecha es obligatoria",
            'SC_PlanMejoramiento_FechaMaxima.required' => "La fecha maxima es obligatoria",      
            'SC_ActoAdministrativo_FK_ID.required' => "El acto administrativo es obligatorio"
            #'SC_TipoNovedades_FK_ID.required' => "El tipo de novedades es obligatorio",
            #'SC_PlanMejoramiento.required' => "El plan de mejoramiento es obligatorio", 

        ];
    }
}