<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{

    public function authorize(){
        return true;
    }

    public function rules()
    {


        return [
            'nome'              =>'required|string|min:8',
            'ch'                =>'required|integer',
            'vagas'             =>'required|integer',
            'dias'              =>'required|array',
            'horario'           =>'required|string',
            'turno'             =>'required|string|min:1',
            'endereco'          =>'required|string|min:10',
            'complemento'       =>'required|string|min:5',
            'bairro'            =>'required|string|min:5',
            'numero'            =>'integer',
            'horat'             =>'required_if:turno,==,A'
        ];
    }

        public function messages()
    {
        return [
            'nome.required'         =>'O nome é obrigatório',
            'nome.string'           =>'O nome tem que ser string',
            'nome.min'              =>'O nome deve possuir ao menos 8 letras',
            'nome.unique'           =>'Já existe um curso com esse nome no mesmo turno',
            'ch.required'           =>'A carga horária é obrigatória',
            'ch.integer'            =>'A carga horária tem que ser inteiro',
            'vagas.required'        =>'A quantidade de vagas é obrigatório',
            'vagas.integer'         =>'A quantidade de vagas tem que ser inteiro',
            'dias.required'         =>'O dia do curso é obrigatório',
            'dias.array'            =>'O dia tem que ser um array',
            'horario.required'      =>'O horário do curso é obrigatório',
            'horario.string'        =>'O horário tem que ser uma string',
            'horat.required_if'     =>'O horário do curso a tarde é obrigatório',
            'turno.required'        =>'O turno é obrigatório',
            'turno.string'          =>'O turno tem que ser string',
            'turno.min'             =>'O turno deve possuir ao menos 1 letra',
            'endereco.required'     =>'O endereco é obrigatório',
            'endereco.string'       =>'O endereco tem que ser string',
            'endereco.min'          =>'O endereco deve possuir ao menos 10 letras',
            'complemento.required'  =>'O complemento é obrigatório',
            'complemento.string'    =>'O complemento tem que ser string',
            'complemento.min'       =>'O complemento deve possuir ao menos 05 letras',
            'bairro.required'       =>'O bairro é obrigatório',
            'bairro.string'         =>'O bairro tem que ser string',
            'bairro.min'            =>'O bairro deve possuir ao menos 05 letras',
            'numero.integer'        =>'O número tem que ser inteiro'
        ];
    }
}
