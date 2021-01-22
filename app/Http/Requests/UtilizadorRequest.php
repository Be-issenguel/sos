<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilizadorRequest extends FormRequest
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
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|email|unique:users,email',
            'telefone' => 'required|unique:users,phone',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'O campo :attribute deve ser um e-mail válido',
            'min' => 'O campo :attribute deve ter no mínimo 8 careacteres',
            'unique' => 'Já existe um utilizador com este :attribute'
        ];
    }
}