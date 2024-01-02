<?php

namespace App\Http\Controllers;

use App\Models\DrivingSchoolCategory;
use Illuminate\Http\Request; 

class DrivingSchoolController extends Controller
{
    public function get_driving_schools()
    {
        $driving_schools = DrivingSchoolCategory::all();
        return (compact('driving_schools'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function new_driving_school(Request $request)
    {
        //guardar datos en la bd
        $driving_school = new DrivingSchoolCategory();

        $driving_school->name         = $request->post('name');
        $driving_school->logo         = $request->post('logo');
        $driving_school->cost         = $request->post('cost');
        $driving_school->phone_number = $request->post('phone_number');
        $driving_school->location     = $request->post('location');

        $driving_school->save();
        return (compact("driving_school"));      
    }

    public function show(DrivingSchoolCategory $driving_school)
    {
        //obtener registro de la tabla
    }

    public function get_driving_school($id)
    {
        $driving_school = DrivingSchoolCategory::find($id);
        return(compact('driving_school'));
    }

    public function update_driving_school(Request $request, $id)
    {
        $driving_school = DrivingSchoolCategory::find($id);

        $driving_school->name         = $request->post('name');
        $driving_school->logo         = $request->post('logo');
        $driving_school->cost         = $request->post('cost');
        $driving_school->phone_number = $request->post('phone_number');
        $driving_school->location     = $request->post('location');

        $driving_school->save();

        return with("success");
    }

    public function delete_driving_school($id)
    {
        $driving_school = DrivingSchoolCategory::find($id);
        $driving_school->delete();
        
        return with("success");
    }

    public function search_driving_school($search){
        $driving_schools = DrivingSchoolCategory::where('location', '=', $search)->get();
        return(compact('driving_schools'));
    }
}
