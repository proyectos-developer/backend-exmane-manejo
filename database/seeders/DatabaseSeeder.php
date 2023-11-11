<?php

namespace Database\Seeders;

use App\Models\CategoriaMotoLineals;
use App\Models\CategoriaMototaxes;
use App\Models\CategoriaCamionetas;
use App\Models\CategoriaBuses;
use App\Models\CategoriaCamiones;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
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
    }
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
