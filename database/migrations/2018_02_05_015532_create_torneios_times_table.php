<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneiosTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneios_times', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('torneios_id')->unsigned();
	        $table->foreign('torneios_id')->references('id')->on('torneios');
	        $table->integer('times_id')->unsigned();
	        $table->foreign('times_id')->references('id')->on('times');
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
        Schema::dropIfExists('torneios_times');
    }
}
