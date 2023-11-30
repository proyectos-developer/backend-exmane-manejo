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
        Schema::create('escuelas_manejos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');        //nombre
            $table->text('logo');            //logo url
            $table->double('costo');         //costo de la escuela de manejo
            $table->text('telefono');        //número de teléfono
            $table->text('ubicacion');        //número de teléfono
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
        Schema::dropIfExists('escuelas_manejos');
    }
};