<?php

namespace App\Http\Controllers;

use App\Models\EscuelasManejo;
use Illuminate\Http\Request; 

class EscuelaManejoController extends Controller
{
    public function obtener_escuelas_manejo()
    {
        $escuelas_manejo = EscuelasManejo::all();
        return (compact('escuelas_manejo'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function crear_escuela_manejo(Request $request)
    {
        //guardar datos en la bd
        $escuela_manejo = new EscuelasManejo();

        $escuela_manejo->nombre      = $request->post('nombre');
        $escuela_manejo->logo        = $request->post('logo');
        $escuela_manejo->costo       = $request->post('costo');
        $escuela_manejo->telefono    = $request->post('telefono');
        $escuela_manejo->ubicacion    = $request->post('ubicacion');

        $escuela_manejo->save();
        return (compact("escuela_manejo"));      
    }

    public function show(EscuelasManejo $escuela_manejo)
    {
        //obtener registro de la tabla
    }

    public function obtener_escuela_manejo($id)
    {
        $escuela_manejo = EscuelasManejo::find($id);
        return(compact('escuela_manejo'));
    }

    public function actualizar_escuela_manejo(Request $request, $id)
    {
        $escuela_manejo = EscuelasManejo::find($id);

        $escuela_manejo->nombre      = $request->post('nombre');
        $escuela_manejo->logo        = $request->post('logo');
        $escuela_manejo->costo       = $request->post('costo');
        $escuela_manejo->telefono    = $request->post('telefono');
        $escuela_manejo->ubicacion    = $request->post('ubicacion');

        $escuela_manejo->save();

        return with("successs");
    }

    public function eliminar_clinica($id)
    {
        $clinica = EscuelasManejo::find($id);
        $clinica->delete();
        
        return with("successs");
    }

    public function buscar_por_distrito($search){
        $escuelas_manejo = EscuelasManejo::where('ubicacion', '=', $search)->get();
        return(compact('escuelas_manejo'));
    }
}
