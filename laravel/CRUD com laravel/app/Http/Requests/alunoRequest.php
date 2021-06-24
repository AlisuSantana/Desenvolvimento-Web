<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alunoRequest extends FormRequest
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
            'nmAluno' => 'required',
            'nmMae' => 'required',
            'nmPai' => 'required',

        ];
    }

    public function messages(){
        
        return [
            'nmAluno.required' => 'Por favor, preencha o campo nome do aluno!',
            'nmMae.required' => 'Por favor, preencha o campo nome da mãe!',
            'nmPai.required'  => 'Por favor, preencha o campo nome da pai!'
        ];
        }
    
}
