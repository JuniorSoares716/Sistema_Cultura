<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idade');
            $table->string('nome',100);
            $table->string('telefone');
            $table->string('celular');
            $table->string('outro');
            $table->string('email',160)->unique();
            $table->enum('turno',array('M','T','N'));
            $table->string('instituicao',190);
            $table->string('ano');
            $table->string('rua',100);
            $table->string('bairro',100);
            $table->string('complemento',100);
            $table->string('numero');
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
        Schema::dropIfExists('pessoa');
    }
}
