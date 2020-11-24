<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->integer('Direccion');
            $table->integer('Edad');
            $table->string('Email',45)->unique();
            $table->string('Sexo',9);
            $table->string('Talento',20);
            $table->unsignedBigInteger('est_maestro');
            $table->foreign('est_maestro')->references('id')->on('maestros');

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
        Schema::dropIfExists('estudiantes');
    }
}
