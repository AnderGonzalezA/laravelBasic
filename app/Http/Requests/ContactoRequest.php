<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Dni;

class ContactoRequest extends FormRequest
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
          'nombre' => 'required|min:2|max:15',
          'apellido' => 'required|min:2|max:20',
          'email' => 'required|email',
          'telefono' => ['nullable','regex:/^[6|7|9][0-9]{8}$/'],
          'dni' => ['required', new Dni]
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Introduce un nombre por favor',
            'apellido.required'  => 'Introduce un apellido por favor',
        ];
    }
}
