<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20);
            $table->string('ap_materno', 15);
            $table->string('ap_paterno', 15);
            $table->integer('edad');
            $table->string('mail');
            $table->string('codigo', 5);
            $table->boolean('preinscrito')->default(false);

            $table->unsignedInteger('pk_escuelas');
            $table->foreign('pk_escuelas')->references('id')->on('escuelas');

            $table->unsignedInteger('pk_inscripcion');
            $table->foreign('pk_inscripcion')->references('id')->on('paiscomites');

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
        Schema::dropIfExists('alumnos');
    }
}
