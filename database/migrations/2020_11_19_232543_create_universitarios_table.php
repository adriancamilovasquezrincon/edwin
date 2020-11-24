<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->integer('Edad');
            $table->string('Sexo',9);
            $table->string('Email',45)->unique();
            $table->integer('Direccion');
            $table->string('Estudio_enseñar',25);
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
        Schema::dropIfExists('universitarios');
    }
}
