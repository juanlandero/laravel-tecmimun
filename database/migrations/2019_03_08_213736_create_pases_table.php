<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pases', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('pk_paiscomite');
            $table->foreign('pk_paiscomite')->references('id')->on('paiscomites');

            $table->unsignedInteger('pk_lista');
            $table->foreign('pk_lista')->references('id')->on('listas');

            $table->string('asistencia')->nullable($value = true);

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
        Schema::dropIfExists('pases');
    }
}
