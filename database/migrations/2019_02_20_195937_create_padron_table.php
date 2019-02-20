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
            $table->string('inscripcion');
            $table->string('codigo');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('tipoidentificacion');
            $table->string('numeroidentificacion');
            $table->date('fecha_nacimiento');
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
