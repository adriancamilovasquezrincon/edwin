<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterpretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Instrumento',15);
            $table->integer('Edad');
            $table->string('Ocupacion',15);
            $table->string('Email',45)->unique();
            $table->unsignedBigInteger('int_profesor');
            $table->unsignedBigInteger('int_estudiante');
            $table->foreign('int_profesor')->references('id')->on('profesores');
            $table->foreign('int_estudiante')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('interpretes');
    }
}
