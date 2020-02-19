<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{

      protected $table = 'categoria';

	  protected $fillable = [
	      'id','nome'
	   ];

	  public function agentes(){
	   	return $this->hasMany(Agente::class);
	  }
}
