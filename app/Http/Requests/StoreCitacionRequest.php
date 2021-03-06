<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitacionRequest extends FormRequest
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
            'SC_Citacion_FechaCitacion'=> 'required',
            'SC_Citacion_Hora'=> 'required',
            'SC_Citacion_Lugar'=> 'required',
            'SC_Citacion_Ciudad'=> 'required', 
            'SC_Citacion_Centro'=> 'required',
            'SC_Solicitud_FK'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            //nombre del campo, regla de validacion y asiganmos el mensaje
            'SC_Citacion_FechaCitacion.required' => "La fecha de citacion es obligatoria",
            'SC_Citacion_Hora.required' => "La hora es obligatoria",
            'SC_Citacion_Lugar.required' => "El lugar es obligatorio",
            'SC_Citacion_Ciudad.required' => "La ciudad es obligatoria",
            'SC_Citacion_Centro.required' => "El centro de formacion es obligatorio",
            'SC_Solicitud_FK.required' => "El numero de la solicitud es obligatorio",
        ];
    }
}