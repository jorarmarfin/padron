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
            $table->increments('id');
            $table->string('inscripcion',6);
            $table->string('codigo',10);
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->string('nombre',100);
            $table->string('sexo');
            $table->string('tipoidentificacion');
            $table->string('numeroidentificacion');
            $table->date('fecha_nacimiento');
            $table->string('pais_nacimiento',255);
            $table->string('departamento_nacimiento',255);
            $table->string('provincia_nacimiento',255);
            $table->string('distrito_nacimiento',255);
            $table->string('direccion',150);
            $table->string('pais_residencia',255);
            $table->string('departamento_residencia',255);
            $table->string('provincia_residencia',255);
            $table->string('distrito_residencia',255);
            $table->string('telefono',100);
            $table->string('email',200);
            $table->bigInteger('inicio_estudios',200);
            $table->bigInteger('fin_estudios',200);
            $table->string('canal',20);
            $table->string('modalidad',255);
            $table->string('segunda_modalidad',255);
            $table->string('tipo_ie',15);
            $table->string('nombre_ie',255);
            $table->string('departamento_ie',255);
            $table->string('provincia_ie',255);
            $table->string('distrito_ie',255);
            $table->string('academia',255);
            $table->string('ingreso_familiar',255);
            $table->integer('veces_postula');
            $table->string('facultad',255);
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
