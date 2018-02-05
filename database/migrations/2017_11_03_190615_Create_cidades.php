<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nome');
            $table->string('sigla');
            $table->string('codigo_ibge');
            $table->integer('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->string('cep_de');
            $table->string('cep_ate');
            $table->string('ecep_de');
            $table->string('ecep_ate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
