<?php

namespace App\Http\Controllers;
use App\Model\Curso;
use App\Model\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller{

    private $curso;
    private $pessoa;

    public function __construct(Curso $curso, Pessoa $pessoa){
        $this->curso = $curso;
        $this->pessoa = $pessoa;
    }

    public function index(){
        return view('site.index');
    }

    public function cursos(Request $request){
        $str = $request->get('consulta','');
        $logado = 0;
        $pessoa = $this->pessoa;
        $cursos = $this->curso->all();

        if($str){

            $rules=['consulta'=>'required|string|email|max:160|exists:pessoa,email'];
            $messages=[
                'consulta.string'          =>'O E-mail tem que ser string',
                'consulta.email'           =>'O E-mail deve ser um E-mail válido',
                'consulta.exists'          =>'O E-mail não está cadastrado',
                'consulta.max'             =>'O E-mail não pode ser maior que 160 caracteres'];
            $validador = Validator::make($request->all(),$rules,$messages);
            
            if($validador->fails())
            {
                return redirect()->route('site.cursos')
                    ->withErrors($validador)
                    ->withInput();
            }
            else{
                $pessoas = $this->pessoa->where('email','=', $str)->first();
                if($pessoas){
                    $logado = 1;
                    return view('site.cursos',compact(['cursos','logado','pessoas']));   
                }

            }
        }

        return view('site.cursos',compact('cursos','logado','pessoa'));
    }

    public function home(){
        return view('site.home');
    }

}