<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'matricula' => 'required',
            'cantidadAsiento' => 'required',
            'cantidadPiso' => 'required',
            'observacion' => 'required',
            'numeroCarril' => 'required',
            'fotoInterna' => 'required',
            'fotoExterna' => 'required',
            'id_Empresa' => 'required'
        ];
    }
}
