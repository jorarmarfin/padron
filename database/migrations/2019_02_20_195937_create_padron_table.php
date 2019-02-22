<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padron', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('nroins',6)->nullable();
            $table->string('codigo',10)->nullable();
            $table->string('paterno',25)->nullable();
            $table->string('materno',25)->nullable();
            $table->string('nombre',50)->nullable();
            $table->string('sexo',50)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('pais_nacimiento',50)->nullable();
            $table->string('departamento_nacimiento',50)->nullable();
            $table->string('provincia_nacimiento',50)->nullable();
            $table->string('distrito_nacimiento',50)->nullable();
            $table->string('pais_residencia',50)->nullable();
            $table->string('departamento_residencia',50)->nullable();
            $table->string('provincia_residencia',50)->nullable();
            $table->string('distrito_residencia',50)->nullable();
            $table->bigInteger('inicio_estudios')->nullable();
            $table->bigInteger('fin_estudios')->nullable();
            $table->string('canal',20)->nullable();
            $table->string('primera_modalidad',50)->nullable();
            $table->string('primera_opcion',255)->nullable();
            $table->string('segunda_modalidad',50)->nullable();
            $table->string('segunda_opcion',255)->nullable();
            $table->string('espeing',255)->nullable();
            $table->string('tipo_ie',15)->nullable();
            $table->string('nombre_ie',255)->nullable();
            $table->string('pais_ie',255)->nullable();
            $table->string('departamento_ie',50)->nullable();
            $table->string('provincia_ie',50)->nullable();
            $table->string('distrito_ie',50)->nullable();
            $table->string('academia',50)->nullable();
            $table->string('ingreso_familiar',50)->nullable();
            $table->integer('veces_postula')->nullable();
            $table->string('preparacion',50)->nullable();
            $table->string('siglas',255)->nullable();
            $table->string('facultad',255)->nullable();
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
        Schema::dropIfExists('padron');
    }
}
