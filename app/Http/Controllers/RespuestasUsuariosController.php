<?php

namespace App\Http\Controllers;

use App\Models\RespuestasUsuarios;
use Illuminate\Http\Request; 

class RespuestasUsuariosController extends Controller
{
    public function obtener_respuestas()
    {
        $respuestas = RespuestasUsuarios::all();
        return (compact('respuestas'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function crear_respuesta(Request $request)
    {
        //guardar datos en la bd
        $respuesta = RespuestasUsuarios::create([
            'email'           => $post_data('email'),
            'categoria'       => $post_data('categoria'),
            'respuesta_uno'   => $post_data('respuesta_uno'),
            'correcta_uno'    => $post_data('correcta_uno'),
            'respuesta_dos'   => $post_data('respuesta_dos'),
            'correcta_dos'    => $post_data('correcta_dos'),
            'respuesta_tres'   => $post_data('respuesta_tres'),
            'correcta_tres'    => $post_data('correcta_tres'),
            'respuesta_cuatro'   => $post_data('respuesta_cuatro'),
            'correcta_cuatro'    => $post_data('correcta_cuatro'),
            'respuesta_cinco'   => $post_data('respuesta_cinco'),
            'correcta_cinco'    => $post_data('correcta_cinco'),
            'respuesta_seis'   => $post_data('respuesta_seis'),
            'correcta_seis'    => $post_data('correcta_seis'),
            'respuesta_siete'   => $post_data('respuesta_siete'),
            'correcta_siete'    => $post_data('correcta_siete'),
            'respuesta_ocho'   => $post_data('respuesta_ocho'),
            'correcta_ocho'    => $post_data('correcta_ocho'),
            'respuesta_nueve'   => $post_data('respuesta_nueve'),
            'correcta_nueve'    => $post_data('correcta_nueve'),
            'respuesta_diez'   => $post_data('respuesta_diez'),
            'correcta_diez'    => $post_data('correcta_diez'),
            'respuesta_once'   => $post_data('respuesta_once'),
            'correcta_once'    => $post_data('correcta_once'),
            'respuesta_doce'   => $post_data('respuesta_doce'),
            'correcta_doce'    => $post_data('correcta_doce'),
            'respuesta_trece'   => $post_data('respuesta_trece'),
            'correcta_trece'    => $post_data('correcta_trece'),
            'respuesta_catorce'   => $post_data('respuesta_catorce'),
            'correcta_catorce'    => $post_data('correcta_catorce'),
            'respuesta_quince'   => $post_data('respuesta_quince'),
            'correcta_quince'    => $post_data('correcta_quince'),
            'respuesta_diezyseis'   => $post_data('respuesta_diezyseis'),
            'correcta_diezyseis'    => $post_data('correcta_diezyseis'),
            'respuesta_diezysiete' => $post_data('respuesta_diezysiete'),
            'correcta_diezysiete'  => $post_data('correcta_diezysiete'),
            'respuesta_diezyocho' => $post_data('respuesta_diezyocho'),
            'correcta_diezyocho'    => $post_data('correcta_diezyocho'),
            'respuesta_diezynueve'   => $post_data('respuesta_diezynueve'),
            'correcta_diezynueve'    => $post_data('correcta_diezynueve'),
            'respuesta_veinte'   => $post_data('respuesta_veinte'),
            'correcta_veinte'    => $post_data('correcta_veinte'),
            'respuesta_veinteyuno'   => $post_data('respuesta_veinteyuno'),
            'correcta_veinteyuno'    => $post_data('correcta_veinteyuno'),
            'respuesta_veinteydos'   => $post_data('respuesta_veinteydos'),
            'correcta_veinteydos'    => $post_data('correcta_veinteydos'),
            'respuesta_veinteytres'=> $post_data('respuesta_veinteytres'),
            'correcta_veinteytres' => $post_data('correcta_veinteytres'),
            'respuesta_veinteycuatro'   => $post_data('respuesta_veinteycuatro'),
            'correcta_veinteycuatro'    => $post_data('correcta_veinteycuatro'),
            'respuesta_veinteycinco'   => $post_data('respuesta_veinteycinco'),
            'correcta_veinteycinco'    => $post_data('correcta_veinteycinco'),
            'respuesta_veinteyseis'   => $post_data('respuesta_veinteyseis'),
            'correcta_veinteyseis'    => $post_data('correcta_veinteyseis'),
            'respuesta_veinteysiete' => $post_data('respuesta_veinteysiete'),
            'correcta_veinteysiete'  => $post_data('correcta_veinteysiete'),
            'respuesta_veinteyocho' => $post_data('respuesta_veinteyocho'),
            'correcta_veinteyocho'    => $post_data('correcta_veinteyocho'),
            'respuesta_veinteynueve'   => $post_data('respuesta_veinteynueve'),
            'correcta_veinteynueve'    => $post_data('correcta_veinteynueve'),
            'respuesta_treinta'   => $post_data('respuesta_treinta'),
            'correcta_treinta'    => $post_data('correcta_treinta'),
            'respuesta_treintayuno'   => $post_data('respuesta_treintayuno'),
            'correcta_treintayuno'    => $post_data('correcta_treintayuno'),
            'respuesta_treintaydos'   => $post_data('respuesta_treintaydos'),
            'correcta_treintaydos'    => $post_data('correcta_treintaydos'),
            'respuesta_treintaytres' => $post_data('respuesta_treintaytres'),
            'correcta_treintaytres' => $post_data('correcta_treintaytres'),
            'respuesta_treintaycuatro'   => $post_data('respuesta_treintaycuatro'),
            'correcta_treintaycuatro'    => $post_data('correcta_treintaycuatro'),
            'respuesta_treintaycinco'   => $post_data('respuesta_treintaycinco'),
            'correcta_treintaycinco'    => $post_data('correcta_treintaycinco'),
            'respuesta_treintayseis'   => $post_data('respuesta_treintayseis'),
            'correcta_treintayseis'    => $post_data('correcta_treintayseis'),
            'respuesta_treintaysiete' => $post_data('respuesta_treintaysiete'),
            'correcta_treintaysiete'  => $post_data('correcta_treintaysiete'),
            'respuesta_treintayocho'=> $post_data('respuesta_treintayocho'),
            'correcta_treintayocho'    => $post_data('correcta_treintayocho'),
            'respuesta_treintaynueve'   => $post_data('respuesta_treintaynueve'),
            'correcta_treintaynueve'    => $post_data('correcta_treintaynueve'),
            'respuesta_cuarenta'   => $post_data('respuesta_cuarenta'),
            'correcta_cuarenta'    => $post_data('correcta_cuarenta'),
            'nro_correctas'   => $post_data('nro_correctas'),
            'nro_incorrectas' => $post_data('nro_incorrectas')
        ]);

        $respuesta->save();
        return response()->json([
            'success' => true
        ]);      
    }

    public function show(RespuestasUsuarios $RespuestasUsuarios)
    {
        //obtener registro de la tabla
    }

    public function obtener_respuesta($id)
    {
        $respuesta = RespuestasUsuarios::find($id);
        return(compact('respuesta'));
    }

    public function actualizar_respuestas(Request $request, $id, $respuesta_usuario, $correcta_usuario)
    {
        $respuesta = RespuestasUsuarios::find($id);

        $respuesta->$respuesta_usuario          = $request->post('respuesta');
        $respuesta->$correcta_usuario           = $request->post('correcta');
        $respuesta->nro_correctas      = $request->post('nro_correctas');
        $respuesta->nro_incorrectas    = $request->post('nro_incorrectas');

        $respuesta->save();

        return with("successs");
    }

    public function eliminar_respuesta($id)
    {
        $respuesta = RespuestasUsuarios::find($id);
        $respuesta->delete();
        
        return with("successs");
    }
}
