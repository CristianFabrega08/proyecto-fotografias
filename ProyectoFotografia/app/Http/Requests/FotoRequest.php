<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|max:20|',
            'archivo' => 'required',
            


        ];
    }

    public function messages(){
        return[
            'titulo.required'=>'Indica el titulo',
            'titulo.max' => 'El titulo tiene que tener maximo 20 caracteres',
            'user.required' => 'Ingresa la foto',
            
        ];
    }
}