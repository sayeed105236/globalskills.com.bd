<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Options;
use App\Models\Question;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('backend.quiz.questions.index',compact('questions'));
    }

    public function store(Request $request)
    {
        $topicID = $request->input('topic_id');
        $courseID = $request->input('course_id');
        $questionText = $request->input('question');
        $optionArray = $request->input('options');
        $correctOptions = $request->input('correct');

        $question = new Question();
        $question->topic_id = $topicID;
        $question->course_id = $courseID;
        $question->question_text = $questionText;
        $question->save();

        $questionToAdd = Question::latest()->first();;
        $questionID = $questionToAdd->id;

        foreach ($optionArray as $index => $opt) {
            $option = new Options();
            $option->question_id = $questionID;
            $option->option = $opt;
            foreach ($correctOptions as $correctOption) {
                if($correctOption == $index+1) {
                    $option->correct = 1;
                }
            }

            $option->save();
        }

        return redirect()->back();
    }

    public function show($id)
    {
        //

        $question = Question::find($id);

        return view('backend.quiz.questions.show', compact('question'));
    }

    public function edit($id)
    {
        $question = Question::find($id);
        $topics = Topic::all();
        return view('backend.quiz.questions.edit', compact('question','topics'));

    }


    public function update(Request $request){
        $question_id = $request->id;
        Question::findOrFail($question_id)->Update([

            'question_text' => $request->question_text,
            'updated_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Question Update Success',
            'alert-type' =>'success'
        );
        return Redirect()->route('questions-index')->with($notification);
    }

    public function questionDelete($id){
        Question::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Question Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }



}
