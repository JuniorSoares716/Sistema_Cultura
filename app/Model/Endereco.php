<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model {

	  protected $table = 'endereco';

	  protected $fillable = [
	      'logradouro','numero','bairro','cep','cidade'
	  ];

	  public function agente(){
	    	return $this->belongsTo(Agente::class);
	}
}

