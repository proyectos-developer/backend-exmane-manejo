<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_camionetas', function (Blueprint $table) {
            $table->id();
            $table->text('pregunta');        //pregunta a realizar
            $table->string('tipo_pregunta'); //0: sin imagen (4 opciones de respuesta), 1: con imagen (3 opciones de respuesta)
            $table->text('imagen');          //url de la imagen correspondiente a la pregunta
            $table->text('opcion_a');        //opción de respuesta a
            $table->text('opcion_b');        //opción de respuesta b
            $table->text('opcion_c');        //opción de respuesta c
            $table->text('opcion_d');        //opción de respuesta d
            $table->string('respuesta');     //respuesta a la pregunta solo (a, b, c, o d)
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
        Schema::dropIfExists('categoria_camionetas');
    }
};
