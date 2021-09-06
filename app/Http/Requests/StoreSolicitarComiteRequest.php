<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSolicitarComiteRequest extends FormRequest
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
            'Responsable'=>'required',
            'Fecha'=>'required',
            'Descripcion'=>'required',
            'Testigos'=>'required',
            'Observaciones'=>'required',
            'Anexo'=>'required',
            'TipoFalta'=>'required',
            'Usuario'=>'required',
            'Aprendiz'=>'required',
            'Gravedad'=>'required',
            'Reglamento'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'Responsable'=>'Este campo es obligatorio',
            'Fecha'=>'Este campo es obligatorio',
            'Descripcion'=>'Este campo es obligatorio',
            'Testigos'=>'Este campo es obligatorio',
            'Observaciones'=>'Este campo es obligatorio',
            'Anexo'=>'Este campo es obligatorio',
            'TipoFalta'=>'Este campo es obligatorio',
            'Usuario'=>'Este campo es obligatorio',
            'Aprendiz'=>'Este campo es obligatorio',
            'Gravedad'=>'Este campo es obligatorio',
            'Reglamento'=>'Este campo es obligatorio'
        ];
    }
}
