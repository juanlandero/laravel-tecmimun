<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmonestacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amonestacion', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('pk_alumno');
            $table->foreign('pk_alumno')->references('id')->on('alumnos');

            $table->integer('amonestacion');

            $table->unsignedInteger('pk_comite');
            $table->foreign('pk_comite')->references('id')->on('comites');

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
        Schema::dropIfExists('amonestacion');
    }
}
