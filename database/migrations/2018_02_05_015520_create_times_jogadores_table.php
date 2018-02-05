<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesJogadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times_jogadores', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('times_id')->unsigned();
	        $table->foreign('times_id')->references('id')->on('times');
	        $table->integer('jogadores_id')->unsigned();
	        $table->foreign('jogadores_id')->references('id')->on('jogadores');
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
        Schema::dropIfExists('times_jogadores');
    }
}
