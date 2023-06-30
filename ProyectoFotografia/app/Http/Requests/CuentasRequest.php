<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuentasRequest extends FormRequest
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
            'user' => 'required|max:20|unique:cuentas,user',
            'password' => 'required|min:3|max:100',
            'nombre' => 'required|max:20',
            'apellido' => 'required|max:20',


        ];
    }

    public function messages(){
        return[
            'user.required'=>'Indica el usuario',
            'user.max' => 'El usuario tiene que tener maximo 20 caracteres',
            'user.unique' => 'Ya existe el usuario input:',
            'password.required' => 'Ingresa la contraseña',
            'password.max' => 'La contraseña tiene que tener maximo 100 caracteres',
            'password.min' => 'La contraseña tiene que tener minimo 3 caracteres',  
            'nombre.required' => 'Indica el nombre',
            'nombre.max'=>'El nombre tiene que tener maximo 20 caracteres',
            'apellido.required'=>'Ingresa el usuario',
            'apellido.max'=>'El apellido tiene que tener maximo 20 caracteres',
        ];
    }
}
