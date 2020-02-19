<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model{
	
	protected $table = 'pessoa';
    //
    protected $fillable=['nome','instituicao','idade','ano','telefone','bairro','complemento','outro','email','turno','celular','cidade','numero','rua'];

    public function cursos(){
        return $this->belongsToMany(Curso::class)->withTimestamps();
    }
}
