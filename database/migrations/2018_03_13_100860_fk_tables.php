<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::table('agente', function ($table) {
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
        });

        Schema::table('endereco', function ($table) {
            $table->foreign('agente_id')->references('id')->on('agente')->onDelete('cascade');
        });

        Schema::table('curso_pessoa', function ($table) {
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
