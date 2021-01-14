<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampanhaRequest extends FormRequest
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
            'valor' => 'required|digits:14',
            'titulo' => 'required',
            'numero_de_identficacao' => 'required',
            'imagem_do_documento' => 'required',
            'imagem_do_projecto' => 'required|mimes:jpeg,jpg,png',
            'descricao' => 'required|min:5',
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute deve ter no mínimo 5 caracteres',
            'mimes' => 'O campo :attribute dever ter os formatos (jpeg,jpg ou png)',
            'digits' => 'O campo :attribute deve ser um número com menos de 14 digitos'
        ];
    }
}