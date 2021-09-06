<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImpugnacionRequest extends FormRequest
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
            'SC_Impugnacion_DescripcionApelacion' => 'required',
            'SC_Comite_FK_ID' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'SC_Impugnacion_DescripcionApelacion.required' => 'Este campo es obligatorio.',
            'SC_Comite_FK_ID.required' => 'Este campo es obligatorio.'
        ];
    }
}
