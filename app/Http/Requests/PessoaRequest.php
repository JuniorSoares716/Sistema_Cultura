<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PessoaRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules()
    {
        $pessoa = $this->route('pessoa');
        return [
            'nome'              =>'required|string|min:8',
            'idade'             =>'required|integer|min:4',
            'instituicao'       =>'required|string|min:4',
            'complemento'       =>'required|string|min:5',
            'bairro'            =>'required|string|min:5',
            'numero'            =>'integer',
            'celular'           =>'required',
            'email'             =>['required','string','email','max:160', Rule::unique('pessoa')->ignore($pessoa)],
            'rua'               =>'required|string|min:10',
            'ano'               =>'required|string|min:1',
            'turno'             =>'required|string|min:1'
        ];
    }

        public function messages()
    {
        return [
            'nome.required'         =>'O nome é obrigatório',
            'nome.string'           =>'O nome tem que ser string',
            'nome.min'              =>'O nome deve possuir ao menos 8 letras',
            'nome.unique'           =>'Já existe um curso com esse nome no mesmo turno',
            'idade.required'        =>'A Idade é obrigatória',
            'idade.integer'         =>'A Idade tem que ser inteiro',
            'idade.min'             =>'A idade deve ser superior a 3 anos',
            'instituicao.required'  =>'O nome da instituicao é obrigatório',
            'instituicao.string'    =>'O nome da insituição tem que ser string',
            'instituicao.min'       =>'O nome da instituição deve possuir ao menos 4 letras',
            'complemento.required'  =>'O complemento é obrigatório',
            'complemento.string'    =>'O complemento tem que ser string',
            'complemento.min'       =>'O complemento deve possuir ao menos 05 letras',
            'bairro.required'       =>'O bairro é obrigatório',
            'bairro.string'         =>'O bairro tem que ser string',
            'bairro.min'            =>'O bairro deve possuir ao menos 05 letras',
            'numero.integer'        =>'O número tem que ser inteiro',
            'celular.required'      =>'O celular é obrigatório',
            'email.required'        =>'O E-mail é obrigatório',
            'email.string'          =>'O E-mail tem que ser string',
            'email.email'           =>'O E-mail deve ser um E-mail válido',
            'email.unique'          =>'O E-mail já está em uso',
            'email.max'             =>'O E-mail não pode ser maior que 160 caracteres',
            'rua.required'          =>'O nome da rua é obrigatório',
            'rua.string'            =>'O nome da rua tem que ser string',
            'rua.min'               =>'O o nome da rua deve possuir ao menos 10 letras',
            'ano.required'          =>'O ano é obrigatório',
            'ano.string'            =>'O ano tem que ser string',
            'ano.min'               =>'O ano deve possuir ao menos 1 letra',
            'turno.required'        =>'O turno é obrigatório',
            'turno.string'          =>'O turno tem que ser string',
            'turno.min'             =>'O turno deve possuir ao menos 1 letra',
        ];
    }
}
