<?php

namespace App\Http\Controllers;

use App\Models\CategoriaCamiones;
use Illuminate\Http\Request; 
use Illuminate\Http\Response; 

class CategoriaCamionesController extends Controller
{
    public function obtener_preguntas()
    {
        $preguntas = CategoriaCamiones::all();
        return (compact('preguntas'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function crear_pregunta(Request $request, Response $response)
    {
        //guardar datos en la bd
        $pregunta = new CategoriaCamiones();

        $pregunta->pregunta      = $request->post('pregunta');
        $pregunta->tipo_pregunta = $request->post('tipo_pregunta');
        $pregunta->imagen        = $request->post('imagen');
        $pregunta->opcion_a      = $request->post('opcion_a');
        $pregunta->opcion_b      = $request->post('opcion_b');
        $pregunta->opcion_c      = $request->post('opcion_c');
        $pregunta->opcion_d      = $request->post('opcion_d');
        $pregunta->respuesta     = $request->post('respuesta');

        $pregunta->save();
        return (compact("pregunta"));  
    }

    public function show(CategoriaCamiones $categoriaCamiones)
    {
        //obtener registro de la tabla
    }

    public function obtener_pregunta($id)
    {
        $pregunta = CategoriaCamiones::find($id);
        return(compact('pregunta'));
    }

    public function actualizar_pregunta(Request $request, $id)
    {
        $pregunta = CategoriaCamiones::find($id);

        $pregunta->pregunta      = $request->post('pregunta');
        $pregunta->tipo_pregunta = $request->post('tipo_pregunta');
        $pregunta->imagen        = $request->post('imagen');
        $pregunta->opcion_a      = $request->post('opcion_a');
        $pregunta->opcion_b      = $request->post('opcion_b');
        $pregunta->opcion_c      = $request->post('opcion_c');
        $pregunta->opcion_d      = $request->post('opcion_d');
        $pregunta->respuesta     = $request->post('respuesta');

        $pregunta->save();

        return with("successs");
    }

    public function eliminar_pregunta($id)
    {
        $pregunta = CategoriaCamiones::find($id);
        $pregunta->delete();
        
        return with("successs");
    }
}
