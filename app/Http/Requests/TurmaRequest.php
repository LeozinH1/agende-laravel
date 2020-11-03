<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest
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
            'descricao' => 'required',
            'criador' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Preencha o campo nome',
            'descricao.required' => 'Preencha o campo descrição',
            'criador.required' => 'Prencha o campo criador',
            'criador.numeric' => 'Preencha o campo criador apenas com numeros'
        ];
    }
}
