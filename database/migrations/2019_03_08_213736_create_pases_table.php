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

            $table->unsignedInteger('pk_alumno');
            $table->foreign('pk_alumno')->references('id')->on('alumnos');

            $table->unsignedInteger('pk_lista');
            $table->foreign('pk_lista')->references('id')->on('listas');

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
