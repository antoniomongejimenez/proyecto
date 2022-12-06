<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo' => 'required|numeric|min:1|digits:10',
            'denominación' => 'required|string|max:255',
            'descripción' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'deporte_id' => 'required',
            'tipo_id' => 'required',
            'marca_id' => 'required',
            'tipos_persona_id' => 'required',
        ];
    }
}
