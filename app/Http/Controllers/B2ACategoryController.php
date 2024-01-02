<?php

namespace App\Http\Controllers;

use App\Models\B2ACategory;
use Illuminate\Http\Request; 

class B2ACategoryController extends Controller
{
    public function get_questions()
    {
        $questions = B2ACategory::all();
        return (compact('questions'));
    }

    public function create() 
    { 
        //el formulario agregamos datos
    }

    public function new_question(Request $request)
    {
        //guardar datos en la bd
        $question = new B2ACategory();

        $question->question      = $request->post('question');
        $question->question_type = $request->post('question_type');
        $question->image         = $request->post('image');
        $question->option_a      = $request->post('option_a');
        $question->option_b      = $request->post('option_b');
        $question->option_c      = $request->post('option_c');
        $question->option_d      = $request->post('option_d');
        $question->answer     = $request->post('answer');

        $question->save();
        return (compact("question"));
        
    }

    public function show(B2ACategory $B2ACategory)
    {
        //obtener registro de la tabla
    }

    public function get_question($id)
    {
        $question = B2ACategory::find($id);
        return(compact('question'));
    }

    public function update_question(Request $request, $id)
    {
        $question = B2ACategory::find($id);

        $question->question      = $request->post('question');
        $question->question_type = $request->post('question_type');
        $question->image        = $request->post('image');
        $question->option_a      = $request->post('option_a');
        $question->option_b      = $request->post('option_b');
        $question->option_c      = $request->post('option_c');
        $question->option_d      = $request->post('option_d');
        $question->answer     = $request->post('answer');

        $question->save();

        return (compact("question"));
    }

    public function delete_question($id)
    {
        $question = B2ACategory::find($id);
        $question->delete();
        
        return with("success");
    }
}
