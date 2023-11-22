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
        $respuesta = new RespuestasUsuarios();

        $respuesta->email           = $request->post('email');
        $respuesta->categoria       = $request->post('categoria');
        $respuesta->respuesta_uno   = $request->post('respuesta_uno');
        $respuesta->correcta_uno    = $request->post('correcta_uno');
        $respuesta->respuesta_dos   = $request->post('respuesta_dos');
        $respuesta->correcta_dos    = $request->post('correcta_dos');
        $respuesta->respuesta_tres   = $request->post('respuesta_tres');
        $respuesta->correcta_tres    = $request->post('correcta_tres');
        $respuesta->respuesta_cuatro   = $request->post('respuesta_cuatro');
        $respuesta->correcta_cuatro    = $request->post('correcta_cuatro');
        $respuesta->respuesta_cinco   = $request->post('respuesta_cinco');
        $respuesta->correcta_cinco    = $request->post('correcta_cinco');
        $respuesta->respuesta_seis   = $request->post('respuesta_seis');
        $respuesta->correcta_seis    = $request->post('correcta_seis');
        $respuesta->respuesta_siete   = $request->post('respuesta_siete');
        $respuesta->correcta_siete    = $request->post('correcta_siete');
        $respuesta->respuesta_ocho   = $request->post('respuesta_ocho');
        $respuesta->correcta_ocho    = $request->post('correcta_ocho');
        $respuesta->respuesta_nueve   = $request->post('respuesta_nueve');
        $respuesta->correcta_nueve    = $request->post('correcta_nueve');
        $respuesta->respuesta_diez   = $request->post('respuesta_diez');
        $respuesta->correcta_diez    = $request->post('correcta_diez');
        $respuesta->respuesta_once   = $request->post('respuesta_once');
        $respuesta->correcta_once    = $request->post('correcta_once');
        $respuesta->respuesta_doce   = $request->post('respuesta_doce');
        $respuesta->correcta_doce    = $request->post('correcta_doce');
        $respuesta->respuesta_trece   = $request->post('respuesta_trece');
        $respuesta->correcta_trece    = $request->post('correcta_trece');
        $respuesta->respuesta_catorce   = $request->post('respuesta_catorce');
        $respuesta->correcta_catorce    = $request->post('correcta_catorce');
        $respuesta->respuesta_quince   = $request->post('respuesta_quince');
        $respuesta->correcta_quince    = $request->post('correcta_quince');
        $respuesta->respuesta_diezyseis   = $request->post('respuesta_diezyseis');
        $respuesta->correcta_diezyseis    = $request->post('correcta_diezyseis');
        $respuesta->respuesta_diezysiete = $request->post('respuesta_diezysiete');
        $respuesta->correcta_diezysiete  = $request->post('correcta_diezysiete');
        $respuesta->respuesta_diezyocho = $request->post('respuesta_diezyocho');
        $respuesta->correcta_diezyocho    = $request->post('correcta_diezyocho');
        $respuesta->respuesta_diezynueve   = $request->post('respuesta_diezynueve');
        $respuesta->correcta_diezynueve    = $request->post('correcta_diezynueve');
        $respuesta->respuesta_veinte   = $request->post('respuesta_veinte');
        $respuesta->correcta_veinte    = $request->post('correcta_veinte');
        $respuesta->respuesta_veinteyuno   = $request->post('respuesta_veinteyuno');
        $respuesta->correcta_veinteyuno    = $request->post('correcta_veinteyuno');
        $respuesta->respuesta_veinteydos   = $request->post('respuesta_veinteydos');
        $respuesta->correcta_veinteydos    = $request->post('correcta_veinteydos');
        $respuesta->respuesta_veinteytres= $request->post('respuesta_veinteytres');
        $respuesta->correcta_veinteytres = $request->post('correcta_veinteytres');
        $respuesta->respuesta_veinteycuatro   = $request->post('respuesta_veinteycuatro');
        $respuesta->correcta_veinteycuatro    = $request->post('correcta_veinteycuatro');
        $respuesta->respuesta_veinteycinco   = $request->post('respuesta_veinteycinco');
        $respuesta->correcta_veinteycinco    = $request->post('correcta_veinteycinco');
        $respuesta->respuesta_veinteyseis   = $request->post('respuesta_veinteyseis');
        $respuesta->correcta_veinteyseis    = $request->post('correcta_veinteyseis');
        $respuesta->respuesta_veinteysiete = $request->post('respuesta_veinteysiete');
        $respuesta->correcta_veinteysiete  = $request->post('correcta_veinteysiete');
        $respuesta->respuesta_veinteyocho = $request->post('respuesta_veinteyocho');
        $respuesta->correcta_veinteyocho    = $request->post('correcta_veinteyocho');
        $respuesta->respuesta_veinteynueve   = $request->post('respuesta_veinteynueve');
        $respuesta->correcta_veinteynueve    = $request->post('correcta_veinteynueve');
        $respuesta->respuesta_treinta   = $request->post('respuesta_treinta');
        $respuesta->correcta_treinta    = $request->post('correcta_treinta');
        $respuesta->respuesta_treintayuno   = $request->post('respuesta_treintayuno');
        $respuesta->correcta_treintayuno    = $request->post('correcta_treintayuno');
        $respuesta->respuesta_treintaydos   = $request->post('respuesta_treintaydos');
        $respuesta->correcta_treintaydos    = $request->post('correcta_treintaydos');
        $respuesta->respuesta_treintaytres = $request->post('respuesta_treintaytres');
        $respuesta->correcta_treintaytres = $request->post('correcta_treintaytres');
        $respuesta->respuesta_treintaycuatro   = $request->post('respuesta_treintaycuatro');
        $respuesta->correcta_treintaycuatro    = $request->post('correcta_treintaycuatro');
        $respuesta->respuesta_treintaycinco   = $request->post('respuesta_treintaycinco');
        $respuesta->correcta_treintaycinco    = $request->post('correcta_treintaycinco');
        $respuesta->respuesta_treintayseis   = $request->post('respuesta_treintayseis');
        $respuesta->correcta_treintayseis    = $request->post('correcta_treintayseis');
        $respuesta->respuesta_treintaysiete = $request->post('respuesta_treintaysiete');
        $respuesta->correcta_treintaysiete  = $request->post('correcta_treintaysiete');
        $respuesta->respuesta_treintayocho= $request->post('respuesta_treintayocho');
        $respuesta->correcta_treintayocho    = $request->post('correcta_treintayocho');
        $respuesta->respuesta_treintaynueve   = $request->post('respuesta_treintaynueve');
        $respuesta->correcta_treintaynueve    = $request->post('correcta_treintaynueve');
        $respuesta->respuesta_cuarenta   = $request->post('respuesta_cuarenta');
        $respuesta->correcta_cuarenta    = $request->post('correcta_cuarenta');
        $respuesta->nro_correctas   = $request->post('nro_correctas');
        $respuesta->nro_incorrectas = $request->post('nro_incorrectas');

        $respuesta->save();
        return with("successs");        
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
