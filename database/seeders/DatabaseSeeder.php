<?php

namespace Database\Seeders;

use App\Models\CategoriaMotoLineals;
use App\Models\CategoriaMototaxes;
use App\Models\CategoriaCamionetas;
use App\Models\CategoriaBuses;
use App\Models\CategoriaCamiones;
use App\Models\RespuestasUsuarios;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        RespuestasUsuarios::create([ 
            'email' => 'j.portocarrero.jp@gmail.com',
            'categoria' => '1',
            'respuesta_uno' => 'a', 
            'correcta_uno' =>  true,
            'respuesta_dos' => '', 
            'correcta_dos' => true,
            'respuesta_tres' => '', 
            'correcta_tres' => false,
            'respuesta_cuatro' => '', 
            'correcta_cuatro' => true,
            'respuesta_cinco' => '', 
            'correcta_cinco' => true,
            'respuesta_seis' => '', 
            'correcta_seis' => true,
            'respuesta_siete' => '', 
            'correcta_siete' => true,
            'respuesta_ocho' => '', 
            'correcta_ocho' => false,
            'respuesta_nueve' => '', 
            'correcta_nueve' => true,
            'respuesta_diez' => '', 
            'correcta_diez' => true,
            'respuesta_once' => '', 
            'correcta_once' => true,
            'respuesta_doce' => '', 
            'correcta_doce' => true,
            'respuesta_trece' => '', 
            'correcta_trece' => true,
            'respuesta_catorce' => '', 
            'correcta_catorce' => true,
            'respuesta_quince' => '', 
            'correcta_quince' => true,
            'respuesta_diezyseis' => '', 
            'correcta_diezyseis' => false,
            'respuesta_diezysiete' => '', 
            'correcta_diezysiete' => true,
            'respuesta_diezyocho' => '', 
            'correcta_diezyocho' => true,
            'respuesta_diezynueve' => '', 
            'correcta_diezynueve' => true,
            'respuesta_veinte' => '', 
            'correcta_veinte' => true,
            'respuesta_veinteyuno' => '', 
            'correcta_veinteyuno' => true,
            'respuesta_veinteydos' => '', 
            'correcta_veinteydos' => false,
            'respuesta_veinteytres' => '', 
            'correcta_veinteytres' => true,
            'respuesta_veinteycuatro' => '', 
            'correcta_veinteycuatro' => true,
            'respuesta_veinteycinco' => '', 
            'correcta_veinteycinco' => true,
            'respuesta_veinteyseis' => '', 
            'correcta_veinteyseis' => true,
            'respuesta_veinteysiete' => '', 
            'correcta_veinteysiete' => true,
            'respuesta_veinteyocho' => '', 
            'correcta_veinteyocho' => true,
            'respuesta_veinteynueve' => '', 
            'correcta_veinteynueve' => true,
            'respuesta_treinta' => '', 
            'correcta_treinta' => true,
            'respuesta_treintayuno' => '', 
            'correcta_treintayuno' => true,
            'respuesta_treintaydos' => '', 
            'correcta_treintaydos' => true,
            'respuesta_treintaytres' => '', 
            'correcta_treintaytres' => true,
            'respuesta_treintaycuatro' => '', 
            'correcta_treintaycuatro' => true,
            'respuesta_treintaycinco' => '', 
            'correcta_treintaycinco' => true,
            'respuesta_treintayseis' => '', 
            'correcta_treintayseis' => true,
            'respuesta_treintaysiete' => '', 
            'correcta_treintaysiete' => true,
            'respuesta_treintayocho' => '', 
            'correcta_treintayocho' => false,
            'respuesta_treintaynueve' => '', 
            'correcta_treintaynueve' => true,
            'respuesta_cuarenta' => '', 
            'correcta_cuarenta' => true,
            'nro_correctas' => 35,
            'nro_incorrectas' => 5
        ]);
    }
    /**public function run(): void
    {
        CategoriaCamiones::create([ 
            'pregunta' => 'Pregunta 1',
            'tipo_pregunta' => '0',
            'imagen' => "",
            'opcion_a' => "Opción de respuesta a",
            'opcion_b' => "Opción de respuesta b",
            'opcion_c' => "Opción de respuesta c",
            'opcion_d' => "Opción de respuesta d",
            'respuesta' => "c",
        ]);
    }***/

    /**public function run(): void
    {
        CategoriaBuses::create([ 
            'pregunta' => 'Pregunta 1',
            'tipo_pregunta' => '0',
            'imagen' => "",
            'opcion_a' => "Opción de respuesta a",
            'opcion_b' => "Opción de respuesta b",
            'opcion_c' => "Opción de respuesta c",
            'opcion_d' => "Opción de respuesta d",
            'respuesta' => "c",
        ]);
    }**/

    /**public function run(): void
    {
        CategoriaCamionetas::create([ 
            'pregunta' => 'Pregunta 1',
            'tipo_pregunta' => '0',
            'imagen' => "",
            'opcion_a' => "Opción de respuesta a",
            'opcion_b' => "Opción de respuesta b",
            'opcion_c' => "Opción de respuesta c",
            'opcion_d' => "Opción de respuesta d",
            'respuesta' => "c",
        ]);
    }**/

    
    /**public function run(): void
    {
        CategoriaMotoLineals::create([ 
            'pregunta' => 'Pregunta 1',
            'tipo_pregunta' => '0',
            'imagen' => "",
            'opcion_a' => "Opción de respuesta a",
            'opcion_b' => "Opción de respuesta b",
            'opcion_c' => "Opción de respuesta c",
            'opcion_d' => "Opción de respuesta d",
            'respuesta' => "c",
        ]);
    **/

    
    /**public function run(): void
    {
        CategoriaMototaxes::create([ 
            'pregunta' => 'Pregunta 1',
            'tipo_pregunta' => '0',
            'imagen' => "",
            'opcion_a' => "Opción de respuesta a",
            'opcion_b' => "Opción de respuesta b",
            'opcion_c' => "Opción de respuesta c",
            'opcion_d' => "Opción de respuesta d",
            'respuesta' => "c",
        ]);
    **/
}
