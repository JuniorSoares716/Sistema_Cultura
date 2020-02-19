<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('agente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->enum('sexo',array('M','F','O'));
            $table->string('serie');
            $table->enum('turno',array('M','T','N'));
            $table->date('nascimento');
            $table->string('rg');
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('celular');
            $table->string('email',160);
            $table->string('atividade',160);
            $table->string('tempo',160);
            $table->string('instituicao',190);
            $table->string('movimento',190);
            $table->unsignedInteger('categoria_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agente');
    }
}
