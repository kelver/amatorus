<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla');
            $table->string('codigo_ibge');
            $table->string('id_pais');
            $table->string('regiao_sigla');
            $table->string('regiao_nome');
            $table->string('ativo');
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
        Schema::dropIfExists('estados');
    }
}
