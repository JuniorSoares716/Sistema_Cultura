<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class AgenteRequest extends FormRequest
{

    public function authorize(){
        return true;
    }

    public function rules()
    {
        $user = $this->route('id');

        return [
            'nome'              =>'required|string|min:8',
            'cpf'               => ['required', Rule::unique('agente')->ignore($user)],
            'rg'                =>'required',
            'nascimento'        =>'required|date',
            'sexo'              =>'required|string|min:1',
            'cat'               =>'required|integer|min:1',
            'miv'               =>'required|string|min:4',
            'atividade'         =>'required|string|min:4',
            'tempo'             =>'required|integer',
            'instituicao'       =>'required|string|min:4',
            'serie'             =>'required|string|min:1',
            'turno'             =>'required|string|min:1',
            'logradouro'        =>'required|string|min:10',
            'cidade'            =>'required|string|min:5',
            'bairro'            =>'required|string|min:5',
            'numero'            =>'numeric',
            'cep'               =>'required|string|min:9',
            'celular'           =>'required',
            'email'             =>'required|string|email|max:160',
        ];
    }

        public function messages()
    {
        return [
            'nome.required'         =>'O nome é obrigatório',
            'nome.string'           =>'O nome tem que ser string',
            'nome.min'              =>'O nome deve possuir ao menos 8 letras',
            'cpf.required'          =>'O CPF é obrigatório',
            'cpf.unique'            =>'O CPF já está em uso',
            'rg.required'           =>'O RG é obrigatório',
            'nascimento.required'   =>'A data de nascimento é obrigatória',
            'nascimento.date'       =>'Entre com uma data válida',
            'sexo.required'         =>'O sexo é obrigatório',
            'sexo.string'           =>'O sexo tem que ser string',
            'sexo.min'              =>'O sexo deve possuir ao menos 1 letra',
            'cat.required'          =>'A categoria é obrigatória',
            'cat.integer'           =>'A categoria tem que ser número',
            'cat.min'               =>'A categoria deve receber no mínimo o valor 1',
            'miv.required'          =>'O movimento cultural é obrigatório',
            'miv.string'            =>'O movimento cultural tem que ser string',
            'miv.min'               =>'O movimento cultural deve possuir ao menos 4 letras',
            'atividade.required'    =>'A atividade é obrigatória',
            'atividade.string'      =>'A atividade tem que ser string',
            'atividade.min'         =>'A atividade deve possuir ao menos 4 letras',
            'tempo.required'        =>'O tempo é obrigatório',
            'tempo.integer'         =>'O tempo tem que ser númerico',
            'instituicao.required'  =>'O nome da instituicao é obrigatório',
            'instituicao.string'    =>'O nome da insituição tem que ser string',
            'instituicao.min'       =>'O nome da instituição deve possuir ao menos 4 letras',
            'serie.required'        =>'A série é obrigatória',
            'serie.string'          =>'A série tem que ser string',
            'serie.min'             =>'A série deve possuir ao menos 1 letra',
            'turno.required'        =>'O turno é obrigatório',
            'turno.string'          =>'O turno tem que ser string',
            'turno.min'             =>'O turno deve possuir ao menos 1 letra',
            'logradouro.required'   =>'O logradouro é obrigatório',
            'logradouro.string'     =>'O logradouro tem que ser string',
            'logradouro.min'        =>'O logradouro deve possuir ao menos 10 letras',
            'cidade.required'       =>'A cidade é obrigatória',
            'cidade.string'         =>'A cidade tem que ser string',
            'cidade.min'            =>'A cidade deve possuir ao menos 5 letras',
            'bairro.required'       =>'O bairro é obrigatório',
            'bairro.string'         =>'O bairro tem que ser string',
            'bairro.min'            =>'O bairro deve possuir ao menos 5 letras',
            'numero.numeric'        =>'O número tem que ser númerico',
            'cep.required'          =>'O CEP é obrigatório',
            'cep.string'            =>'O CEP tem que ser string',
            'cep.min'               =>'O CEP deve possuir ao menos 10 letras',
            'celular.required'      =>'O celular é obrigatório',
            'celular.numeric'       =>'O celular deve conter apenas números',
            'email.required'        =>'O E-mail é obrigatório',
            'email.string'          =>'O E-mail tem que ser string',
            'email.email'           =>'O E-mail deve ser um E-mail válido',
            'email.unique'          =>'O E-mail já está em uso',
            'email.max'             =>'O E-mail não pode ser maior que 160 caracteres'
        ];
    }
}
