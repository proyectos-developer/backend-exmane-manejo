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
        Schema::create('respuestas_usuarios', function (Blueprint $table) {
            $table->id();
            $table->text('email');            //email del usuario
            $table->string('categoria');  //categoría de exámen brindado
            $table->string('respuesta_uno');  //respuesta brindada por usuario
            $table->boolean('correcta_uno');   //respuesta correcta
            $table->string('respuesta_dos');  //respuesta brindada por usuario
            $table->boolean('correcta_dos');   //respuesta correcta
            $table->string('respuesta_tres');  //respuesta brindada por usuario
            $table->boolean('correcta_tres');   //respuesta correcta
            $table->string('respuesta_cuatro');  //respuesta brindada por usuario
            $table->boolean('correcta_cuatro');   //respuesta correcta
            $table->string('respuesta_cinco');  //respuesta brindada por usuario
            $table->boolean('correcta_cinco');   //respuesta correcta
            $table->string('respuesta_seis');  //respuesta brindada por usuario
            $table->boolean('correcta_seis');   //respuesta correcta
            $table->string('respuesta_siete');  //respuesta brindada por usuario
            $table->boolean('correcta_siete');   //respuesta correcta
            $table->string('respuesta_ocho');  //respuesta brindada por usuario
            $table->boolean('correcta_ocho');   //respuesta correcta
            $table->string('respuesta_nueve');  //respuesta brindada por usuario
            $table->boolean('correcta_nueve');   //respuesta correcta
            $table->string('respuesta_diez');  //respuesta brindada por usuario
            $table->boolean('correcta_diez');   //respuesta correcta
            $table->string('respuesta_once');  //respuesta brindada por usuario
            $table->boolean('correcta_once');   //respuesta correcta
            $table->string('respuesta_doce');  //respuesta brindada por usuario
            $table->boolean('correcta_doce');   //respuesta correcta
            $table->string('respuesta_trece');  //respuesta brindada por usuario
            $table->boolean('correcta_trece');   //respuesta correcta
            $table->string('respuesta_catorce');  //respuesta brindada por usuario
            $table->boolean('correcta_catorce');   //respuesta correcta
            $table->string('respuesta_quince');  //respuesta brindada por usuario
            $table->boolean('correcta_quince');   //respuesta correcta
            $table->string('respuesta_diezyseis');  //respuesta brindada por usuario
            $table->boolean('correcta_diezyseis');   //respuesta correcta
            $table->string('respuesta_diezysiete');  //respuesta brindada por usuario
            $table->boolean('correcta_diezysiete');   //respuesta correcta
            $table->string('respuesta_diezyocho');  //respuesta brindada por usuario
            $table->boolean('correcta_diezyocho');   //respuesta correcta
            $table->string('respuesta_diezynueve');  //respuesta brindada por usuario
            $table->boolean('correcta_diezynueve');   //respuesta correcta
            $table->string('respuesta_veinte');  //respuesta brindada por usuario
            $table->boolean('correcta_veinte');   //respuesta correcta
            $table->string('respuesta_veinteyuno');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteyuno');   //respuesta correcta
            $table->string('respuesta_veinteydos');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteydos');   //respuesta correcta
            $table->string('respuesta_veinteytres');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteytres');   //respuesta correcta
            $table->string('respuesta_veinteycuatro');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteycuatro');   //respuesta correcta
            $table->string('respuesta_veinteycinco');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteycinco');   //respuesta correcta
            $table->string('respuesta_veinteyseis');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteyseis');   //respuesta correcta
            $table->string('respuesta_veinteysiete');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteysiete');   //respuesta correcta
            $table->string('respuesta_veinteyocho');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteyocho');   //respuesta correcta
            $table->string('respuesta_veinteynueve');  //respuesta brindada por usuario
            $table->boolean('correcta_veinteynueve');   //respuesta correcta
            $table->string('respuesta_treinta');  //respuesta brindada por usuario
            $table->boolean('correcta_treinta');   //respuesta correcta
            $table->string('respuesta_treintayuno');  //respuesta brindada por usuario
            $table->boolean('correcta_treintayuno');   //respuesta correcta
            $table->string('respuesta_treintaydos');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaydos');   //respuesta correcta
            $table->string('respuesta_treintaytres');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaytres');   //respuesta correcta
            $table->string('respuesta_treintaycuatro');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaycuatro');   //respuesta correcta
            $table->string('respuesta_treintaycinco');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaycinco');   //respuesta correcta
            $table->string('respuesta_treintayseis');  //respuesta brindada por usuario
            $table->boolean('correcta_treintayseis');   //respuesta correcta
            $table->string('respuesta_treintaysiete');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaysiete');   //respuesta correcta
            $table->string('respuesta_treintayocho');  //respuesta brindada por usuario
            $table->boolean('correcta_treintayocho');   //respuesta correcta
            $table->string('respuesta_treintaynueve');  //respuesta brindada por usuario
            $table->boolean('correcta_treintaynueve');   //respuesta correcta
            $table->string('respuesta_cuarenta');  //respuesta brindada por usuario
            $table->boolean('correcta_cuarenta');   //respuesta correcta
            $table->integer('nro_correctas');  //respuesta brindada por usuario
            $table->integer('nro_incorrectas');   //respuesta correcta
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
        Schema::dropIfExists('respuestas_usuarios');
    }
};
