<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40);

            $table->unsignedInteger('pk_idioma');
            $table->foreign('pk_idioma')->references('id')->on('idiomas');

            $table->string('codigo', 30);
            $table->string('user_codigo', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comites');
    }
}