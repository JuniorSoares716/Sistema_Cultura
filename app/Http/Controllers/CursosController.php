<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Curso;
use App\Model\Pessoa;
use App\Http\requests\CursoRequest;


class CursosController extends Controller{
    private $curso;
    	 
    public function __construct(Curso $curso, Pessoa $pessoa){
        $this->middleware('auth');
        $this->curso = $curso;
        $this->pessoa = $pessoa;
    }

    public function index(){
        return view('curso.create');
    }

 	public function create(){
        $cursos = $this->curso->all();
        return view('curso.create',compact('cursos'));
    }
	
    public function store(CursoRequest $req){      

        if($req->get('horat')){
            $horario = [$req->get('horario'),$req->get('horat')];
        }
        else{
            $horario = $req->get('horario');
        }

        if($req->get('dias')){

            $dias = $req->get('dias');

            foreach ($dias as $d ) {
                $dia = $this->curso->dias .= $d."-";
            }

            $size = strlen($dia);
            $dia = substr($dia,0, $size-1);
        }

        if($req->get('documento')){
            $documentos = $req->get('documento');
            foreach ($documentos as $doc ) {
                $documento = $this->curso->documento .= $doc."-";
            }

            $size = strlen($documento);
            $documento = substr($documento,0, $size-1);
        }
        else{
            $documento = "";
        }

        $nome               = $req->get('nome');
        $carga_horaria      = $req->get('ch');
        $endereco           = $req->get('endereco');
        $numero             = $req->get('numero');
        $bairro             = $req->get('bairro');
        $complemento        = $req->get('complemento');
        $vagas              = $req->get('vagas');
        $turno              = $req->get('turno');


        if($req->get('turno') == "A"){
            $turnos = ['M','T'];
            $cursos = [new Curso, new Curso];

            for ($i=0; $i <2 ; $i++) {
                $cursos[$i]->nome = $nome;
                $cursos[$i]->ch = $carga_horaria;
                $cursos[$i]->endereco = $endereco;
                $cursos[$i]->bairro = $bairro;
                $cursos[$i]->numero = $numero;
                $cursos[$i]->complemento = $complemento;
                $cursos[$i]->horario = $horario[$i];
                $cursos[$i]->vagas = $vagas;
                $cursos[$i]->turno = $turnos[$i];
                $cursos[$i]->documento = $documento;
                $cursos[$i]->dias = $dia;
                $inserido[$i] = $cursos[$i]->save();
            }

            if($inserido[0] && $inserido[1]){
                return redirect()->route('curso.show')
                ->withInput()
                ->with(['insert' => true]);
            }
        }
        else{

            $this->curso->nome = $nome;
            $this->curso->ch = $carga_horaria;
            $this->curso->endereco = $endereco;
            $this->curso->bairro = $bairro;
            $this->curso->numero = $numero;
            $this->curso->complemento = $complemento;
            $this->curso->horario = $horario;
            $this->curso->vagas = $vagas;
            $this->curso->turno = $turno;
            $this->curso->documento = $documento;
            $this->curso->dias = $dia;

            $inserido = $this->curso->save();

            if($inserido){
                return redirect()->route('curso.show')
                ->withInput()
                ->with(['insert' => true]);
            }
        }  
    }

    public function show(Request $request){

        $str = $request->get('pesquisa','');
        if($str){
            $cursos = $this->curso->where('nome','LIKE','%'.$str.'%')->get();
        }
        else{
            $cursos = $this->curso->all();
        }

        return view('curso.show', compact('cursos'));

    }

    public function pessoas($curso){
        $curso = $this->curso->find($curso);
        return view('curso.pessoas', compact('curso'));
    }

    public function desmatricular($curso, $pessoa){

        $cursos = $this->curso->find($curso);
        $pessoas = $this->pessoa->find($pessoa);
        
        if($cursos && $pessoas){
            
            $cursos->pessoas()->detach($pessoas);

            return redirect()->route('curso.pessoas',['curso' => $curso])
            ->withInput()
            ->with('success',$pessoas->nome.' foi desmatriculado(a) do curso.');  
  
        }
        else{
            return redirect()->route('curso.pessoas',['curso' => $curso])
                ->withInput()
                ->with('error',$pessoas->nome.' não foi desmatriculado(a) do curso.');
        }
    }


    public function delete($id){

        $curso = $this->curso->find($id);

        if($curso->delete())
        {
            return redirect()->route('curso.show')
                ->withInput()
                ->with(['delete' => true, 'nome' => $curso->nome]);
        }
    }

    public function edit($id){

        $curso = $this->curso->find($id);
        $qtd = $this->curso->where('nome','=',$curso->nome)->count();
        return view('curso.edit', compact('curso','qtd'));
    }

    public function update(CursoRequest $req, $id){      
        $curso = $this->curso->find($id);
        $dia = '';
        $documento = "";

        if($req->get('dias')){

            $dias = $req->get('dias');

            foreach ($dias as $d ) {
                $dia = $this->curso->dias .= $d."-";
            }

            $size = strlen($dia);
            $dia = substr($dia,0, $size-1);
        }

        if($req->get('documento')){
            $documentos = $req->get('documento');
            foreach ($documentos as $doc ) {
                $documento = $this->curso->documento .= $doc."-";
            }

            $size = strlen($documento);
            $documento = substr($documento,0, $size-1);
        }
          $curso->nome          = $req->get('nome');
          $curso->ch            = $req->get('ch');
          $curso->endereco      = $req->get('endereco');
          $curso->numero        = $req->get('numero');
          $curso->bairro        = $req->get('bairro');
          $curso->complemento   = $req->get('complemento');
          $curso->horario       = $req->get('horario');
          $curso->vagas         = $req->get('vagas');
          $curso->turno         = $req->get('turno');
          $curso->documento = $documento;
          $curso->dias = $dia;

          $atualizado = $curso->save();

        if($atualizado){
            return redirect()->route('curso.show')
            ->withInput()
            ->with(['update' => true]);
        }
    }
} 
