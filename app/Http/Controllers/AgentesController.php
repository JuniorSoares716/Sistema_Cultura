<?php

namespace App\Http\Controllers;
use App\Http\requests\AgenteRequest;
use App\Model\Agente;
use App\Model\Endereco;
use App\Model\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AgentesController extends Controller{

     private $agt;
     private $end;
     private $cat;

    public function __construct(Agente $agt, Endereco $end, Categoria $cat){
        $this->middleware('auth');
        $this->agt = $agt;
        $this->end = $end;
        $this->cat = $cat;
    }

    public function create(){
        $categorias = $this->cat->all();
        return view('agente.create',compact('categorias'));
    }

    public function store(AgenteRequest $req){

      // --------- Agentes ------------
      $p = Agente::create([
        'nome'          => $req->input('nome'),
        'sexo'          => $req->input('sexo'),
        'instituicao'   => $req->input('instituicao'),
        'serie'         => $req->input('serie'),
        'turno'         => $req->input('turno'),
        'atividade'     => $req->input('atividade'),
        'tempo'         => $req->input('tempo'),
        'nascimento'    => implode("-", array_reverse(explode("/",$req->input('nascimento')))),
        'rg'            => $req->input('rg'),
        'cpf'           => $req->input('cpf'),
        'telefone'      => $req->input('telefone'),
        'celular'       => $req->input('celular'),
        'email'         => $req->input('email'),
        'movimento'     => $req->input('miv'),
      // ------- Categorias -------------
        'categoria_id'  => $req->input('cat')
        ])
        // -------- Endereços -------------
        ->endereco()
        ->create([
          'logradouro'  => $req->input('logradouro'),
          'numero'      => $req->input('numero'),
          'bairro'      => $req->input('bairro'),
          'cep'         => $req->input('cep'),
          'cidade'      => $req->input('cidade')
        ]);

      if($p){
         return redirect()->route('agente.show')
                ->withInput()
                ->with(['insert' => true]);
      }

	}

  public function show(Request $req){

        $agentes = null;
        $categorias = null;

        $str = $req->get('pesquisa','');
        $radio = $req->get('opt','');

        if($str){

          $rules = ['opt' => 'required'];
          $messages = ['opt.required' => 'Selecione uma opção antes'];
          $validador = Validator::make($req->all(), $rules, $messages);

          if($validador->fails()){
            return redirect()->route('agente.show')
            ->withErrors($validador)
            ->withInput();
          }
          else{
            if($radio == "nome"){
              $agentes = $this->agt->where('nome','LIKE','%'.$str.'%')->get();
            }
            elseif($radio == "cpf"){
              $agentes = $this->agt->where('cpf','=', $str)->get();
            }
            else{
              $categorias = $this->cat->with('agentes')->where('nome','LIKE','%'.$str.'%')->get();
            }

            return view('agente.show', compact('agentes','categorias'));
          }
        }
        else{
            $agentes = $this->agt->with('categoria','endereco')->get();
            return view('agente.show', compact('agentes','categorias'));
        }
  }

  public function delete($id){

    $agentes = $this->agt->find($id);

        if($agentes->delete())
        {
            return redirect()->route('agente.show')
                ->withInput()
                ->with(['delete' => true, 'nome' => $agentes->nome]);
        }
  }


  public function edit($id){

    $agente = $this->agt->find($id);
    $agente->nacimento = implode("/", array_reverse(explode("-",$agente->nacimento)));
    $categorias = $this->cat->all();
    return view('agente.edit', compact('agente', 'categorias'));

  }

  public function update(AgenteRequest $req, $id){

     $agente = $this->agt->find($id);


      //Alterando campos
      $agente->nome = $req->input('nome');
      $agente->sexo = $req->input('sexo');
      $agente->instituicao = $req->input('instituicao');
      $agente->serie = $req->input('serie');
      $agente->turno = $req->input('turno');
      $agente->atividade = $req->input('atividade');
      $agente->tempo = $req->input('tempo');
      $agente->nascimento = implode("-", array_reverse(explode("/",$req->input('nascimento'))));
      $agente->rg = $req->input('rg');
      $agente->telefone = $req->input('telefone');
      $agente->celular = $req->input('celular');
      $agente->email = $req->input('email');
      $agente->movimento = $req->input('miv');
      $agente->cpf = $req->input('cpf');
      $agente->categoria_id = $req->input('cat');

    
      //Salvando os novos dados do Agente
      $agente->update();

      //Atualizando inclusive o endereço se assim quiser
      $agente->endereco()->update([
          'logradouro'  => $req->input('logradouro'),
          'numero'      => $req->input('numero'),
          'bairro'      => $req->input('bairro'),
          'cep'         => $req->input('cep'),
          'cidade'      => $req->input('cidade')
      ]);

        return redirect()->route('agente.show')
        ->withInput()
        ->with('update', true);
       
  }

}


    

