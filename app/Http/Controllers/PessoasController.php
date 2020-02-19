<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pessoa;
use App\Model\Curso;
use App\Http\requests\PessoaRequest;
use Illuminate\Support\Facades\DB;

class PessoasController extends Controller
{
    private $pessoa;
    private $curso;

    public function __construct(Pessoa $pessoa, Curso $curso){
        $this->pessoa = $pessoa;
        $this->curso  = $curso;
    }

    public function create(){
        return view('pessoa.create');
    }

    public function store(PessoaRequest $req){

        $this->pessoa->nome         = $req->input('nome');
        $this->pessoa->idade        = $req->input('idade');
        $this->pessoa->telefone     = $req->input('telefone');
        $this->pessoa->celular      = $req->input('celular');
        $this->pessoa->outro        = $req->input('outro');
        $this->pessoa->email        = $req->input('email');
        $this->pessoa->turno        = $req->input('turno');
        $this->pessoa->instituicao  = $req->input('instituicao');
        $this->pessoa->ano          = $req->input('ano');
        $this->pessoa->rua          = $req->input('rua');
        $this->pessoa->bairro       = $req->input('bairro');
        $this->pessoa->complemento  = $req->input('complemento');
        $this->pessoa->numero       = $req->input('numero');


        $pessoa_inserida = $this->pessoa->save();

        if($pessoa_inserida)
        {
            return redirect()->route('site.cursos')
                ->withInput()
                ->with('success','Você: '.$req->input('nome').' se cadastrou no sistema');
        }
        
    }

    public function edit($pessoa, $curso){
        $pessoa = $this->pessoa->find($pessoa);
        $curso = $curso;
        return view('pessoa.edit', compact('pessoa','curso'));
    }

    public function update(PessoaRequest $req, $pessoa, $curso){
        
        $pessoa = $this->pessoa->find($pessoa);

        $pessoa->nome         = $req->input('nome');
        $pessoa->idade        = $req->input('idade');
        $pessoa->telefone     = $req->input('telefone');
        $pessoa->celular      = $req->input('celular');
        $pessoa->outro        = $req->input('outro');
        $pessoa->email        = $req->input('email');
        $pessoa->turno        = $req->input('turno');
        $pessoa->instituicao  = $req->input('instituicao');
        $pessoa->ano          = $req->input('ano');
        $pessoa->rua          = $req->input('rua');
        $pessoa->bairro       = $req->input('bairro');
        $pessoa->complemento  = $req->input('complemento');
        $pessoa->numero       = $req->input('numero');


        $pessoa_atualizada = $pessoa->save();

        if($pessoa_atualizada)
        {
            return redirect()->route('curso.pessoas',['curso' => $curso])
            ->withInput()
            ->with('success',$pessoa->nome.' foi atualizado(a) no sistema.');
        }
    }

    public function matricular($pessoa, $curso){

        $cursos = $this->curso->find($curso);
        $pessoas = $this->pessoa->find($pessoa);
        
        $qtd = DB::table('curso_pessoa')->where([
            ['pessoa_id', '=',$pessoa],
            ['curso_id','=', $curso]
        ])->count();

        if($qtd==0){

            if($cursos && $pessoas){
                
                $cursos->pessoas()->attach($pessoas);
                return redirect()->route('site.cursos')
                ->withInput()
                ->with('success','Você: '.$pessoas->nome.' se cadastrou no curso: '.$cursos->nome);
            }
        }
        else{
            return redirect()->route('site.cursos')
                ->withInput()
                ->with('error','Você: '.$pessoas->nome.' não conseguiu se cadastrar no curso: '.$cursos->nome);
        }
    }

    public function desmatricular($pessoa, $curso){

        $cursos = $this->curso->find($curso);
        $pessoas = $this->pessoa->find($pessoa);
        
        if($cursos && $pessoas){
            
            $cursos->pessoas()->detach($pessoas);

            return redirect()->route('site.cursos')
            ->withInput()
            ->with('success','Você: '.$pessoas->nome.' desmatriculou-se do curso: '.$cursos->nome);
        }
        else{
            return redirect()->route('site.cursos')
                ->withInput()
                ->with('error','Você: '.$pessoas->nome.' não conseguiu se desmatricular do curso: '.$cursos->nome);
        }
    }

    public function delete($pessoa){

        $pessoa = $this->pessoa->find($pessoa);
        $nome = $pessoa->nome;

        if($pessoa->delete())
        {
            return redirect()->back()
            ->with('success' , $nome.' foi removido do sistema');
        }
    }

}
