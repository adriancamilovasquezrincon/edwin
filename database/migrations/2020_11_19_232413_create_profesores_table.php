<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->bigIncrements('id_profesor');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->integer('Direccion');
            $table->integer('Telefono');
            $table->string('Sexo',9);
            $table->integer('Edad');
            $table->string('Email',45)->unique();
            $table->string('Cargo',12);
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
        Schema::dropIfExists('profesores');
    }
}
