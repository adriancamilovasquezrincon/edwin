<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->integer('Telefono');
            $table->string('Nombre_artistico',15);
            $table->string('Sexo',9);
            $table->integer('Direccion');
            $table->integer('Edad');
            $table->unsignedBigInteger('cant_socio');
            $table->foreign('cant_socio')->references('id')->on('socios');
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
        Schema::dropIfExists('cantantes');
    }
}
