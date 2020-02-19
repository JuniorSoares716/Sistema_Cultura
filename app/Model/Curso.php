<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
	
	protected $table = 'curso';
    //
    protected $fillable=['nome','ch','endereco','numero','bairro','complemento','dias','horario','turno','documento','vagas'];

    public function pessoas(){
        return $this->belongsToMany(Pessoa::class)->withTimestamps();
    }
}
