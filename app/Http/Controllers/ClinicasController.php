<?php

namespace App\Http\Controllers;

use App\Models\Clinicas;
use Illuminate\Http\Request; 

class ClinicasController extends Controller
{
    public function obtener_clinicas()
    {
        $clinicas = Clinicas::all();
        return (compact('clinicas'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function crear_clinica(Request $request)
    {
        //guardar datos en la bd
        $clinica = new Clinicas();

        $clinica->nombre      = $request->post('nombre');
        $clinica->logo        = $request->post('logo');
        $clinica->costo       = $request->post('costo');
        $clinica->telefono    = $request->post('telefono');
        $clinica->ubicacion    = $request->post('ubicacion');

        $clinica->save();
        return (compact("clinica"));      
    }

    public function show(Clinicas $Clinicas)
    {
        //obtener registro de la tabla
    }

    public function obtener_clinica($id)
    {
        $clinica = Clinicas::find($id);
        return(compact('clinica'));
    }

    public function actualizar_clinica(Request $request, $id)
    {
        $clinica = Clinicas::find($id);

        $clinica->nombre      = $request->post('nombre');
        $clinica->logo        = $request->post('logo');
        $clinica->costo       = $request->post('costo');
        $clinica->telefono    = $request->post('telefono');
        $clinica->ubicacion    = $request->post('ubicacion');

        $clinica->save();

        return with("successs");
    }

    public function eliminar_clinica($id)
    {
        $clinica = Clinicas::find($id);
        $clinica->delete();
        
        return with("successs");
    }

    public function buscar_por_distrito($search){
        $clinicas = Clinicas::where('ubicacion', '=', $search)->get();
        return(compact('clinicas'));
    }
}
