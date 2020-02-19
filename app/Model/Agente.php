<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model{

	    protected $table = 'agente';

	    protected $fillable = [ 'nome','sexo','instituicao','serie','turno','nascimento','rg','cpf','telefone','celular','email','atividade','tempo', 'categoria_id', 'updated_at','created_at','movimento'
	    ];


	    public function categoria(){
	    	return $this->belongsTo(Categoria::class);
	    }

	    public function endereco(){
	  		return $this->hasOne(Endereco::class);
	  	}
    
}
