<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiscomitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiscomites', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('pk_pais');
            $table->foreign('pk_pais')->references('id')->on('pais');

            $table->unsignedInteger('pk_comite');
            $table->foreign('pk_comite')->references('id')->on('comites');

            $table->unsignedInteger('pk_alumno');
            $table->foreign('pk_alumno')->references('id')->on('alumnos');

            $table->boolean('activo')->default(true);

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
        Schema::dropIfExists('paiscomites');
    }
}
