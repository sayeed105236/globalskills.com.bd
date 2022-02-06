<?php

namespace App\Http\Controllers;

use App\Models\Options;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionsOptionsController extends Controller
{
    public function index()
    {
        $options = Options::all();

        return view('backend.quiz.questionsOptions.index', ['options'=>$options]);
    }
    public function show($id)
    {
        $option = Options::find($id);
        return view('backend.quiz.questionsOptions.show', compact('option'));
    }

    public function edit($id)
    {
        $questions = Question::all();
        $option = Options::find($id);

        return view('backend.quiz.questionsOptions.edit', compact('option','questions'));
    }



    public function update(Request $request, $id)
    {
        //

        $option = Options::find($id);

        $option->question_id = $request->input('question_id');
        $option->option = $request->input('option');
        $option->correct = $request->input('correct');
        $option->save();

        return redirect(route('questionsOptions-index'));
    }

    public function optionDelete($id){
        Options::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Option Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }
}
