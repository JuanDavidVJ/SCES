<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdministrativoRequest extends FormRequest
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
            'SC_Notificacion_Sugerencia' => 'required',
            'SC_Notificacion_TipoPlan' => 'required',
            'SC_Notificacion_Plan' => 'required|file',
            'SC_ActaComite_FK' => 'required',
            'SC_Notificacion_FechaInicial' => 'required',
            'SC_Notificacion_FechaLimite' => 'required',
            'SC_Comite_FK_ID' => 'required',
            'SC_TipoNotificacion_FK' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'SC_Notificacion_Sugerencia.required' => 'Este campo es obligatorio.',
            'SC_Notificacion_TipoPlan.required' => 'Este campo es obligatorio.',
            'SC_Notificacion_Plan.required' => 'Debe adjuntar el plan.',
            'SC_Notificacion_FechaInicial.required' => 'Este campo es obligatorio.',
            'SC_Notificacion_FechaLimite.required' => 'Este campo es obligatorio.',
            'SC_ActaComite_FK.required' => 'Este campo es obligatorio.',
            'SC_TipoNotificacion_FK.required' => 'Este campo es obligatorio.'
        ];
    }
}
