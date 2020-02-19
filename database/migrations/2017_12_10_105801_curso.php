<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('curso',function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome',100);
        $table->string('ch');
        $table->string('endereco');
        $table->string('numero');
        $table->string('bairro');
        $table->string('complemento');
        $table->string('dias');
        $table->string('horario');
        $table->enum('turno',array('M','T'));
        $table->unsignedInteger('vagas');
        $table->string('documento');
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
       Schema::dropIfExists('curso');
    }
}
