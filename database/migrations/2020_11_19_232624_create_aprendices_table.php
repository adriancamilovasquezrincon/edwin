<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Pasion',10);
            $table->string('Est_preUniversitario',15);
            $table->string('Email',45)->unique();
            $table->string('Sexo',9);
            $table->integer('Direccion');
            $table->integer('Nro_aprendiz');
            $table->unsignedBigInteger('Apr_universidad');
            $table->foreign('Apr_universidad')->references('id')->on('universitarios');
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
        Schema::dropIfExists('aprendices');
    }
}
