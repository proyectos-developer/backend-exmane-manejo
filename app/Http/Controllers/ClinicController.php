<?php

namespace App\Http\Controllers;

use App\Models\ClinicCategory;
use Illuminate\Http\Request; 

class ClinicController extends Controller
{
    public function get_clinics()
    {
        $clinics = ClinicCategory::all();
        return (compact('clinics'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function new_clinic(Request $request)
    {
        //guardar datos en la bd
        $clinic = new ClinicCategory();

        $clinic->name         = $request->post('name');
        $clinic->logo         = $request->post('logo');
        $clinic->cost         = $request->post('cost');
        $clinic->phone_number = $request->post('phone_number');
        $clinic->location     = $request->post('location');

        $clinic->save();
        return (compact("clinic"));      
    }

    public function show(ClinicCategory $clinic)
    {
        //obtener registro de la tabla
    }

    public function get_clinic($id)
    {
        $clinic = ClinicCategory::find($id);
        return(compact('clinic'));
    }

    public function update_clinic(Request $request, $id)
    {
        $clinic = ClinicCategory::find($id);

        $clinic->name         = $request->post('name');
        $clinic->logo         = $request->post('logo');
        $clinic->cost         = $request->post('cost');
        $clinic->phone_number = $request->post('phone_number');
        $clinic->location     = $request->post('location');

        $clinic->save();

        return with("success");
    }

    public function delete_clinic($id)
    {
        $clinic = ClinicCategory::find($id);
        $clinic->delete();
        
        return with("success");
    }

    public function search_clinic($search){
        $clinics = ClinicCategory::where('location', '=', $search)->get();
        return(compact('clinics'));
    }
}
