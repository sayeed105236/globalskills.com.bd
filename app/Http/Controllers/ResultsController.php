<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use App\Models\UserOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
    public function index()
    {
        $allResults = Result::orderBy('created_at', 'desc')->get();
        return view('backend.quiz.results.index', compact('allResults'));
    }

    public function store(Request $request)
    {
        $score = 0;
        $questions = $request->input('option');

        if ($questions) {
            foreach ($questions as $key => $value) {
                $question = Question::find($key);
                $userCorrectAnswers = 0;
                foreach ($value as $answerKey => $answerValue) {
                    if ($answerValue == 1) {
                        $userCorrectAnswers++;
                    } else {
                        $userCorrectAnswers--;
                    }
                }
                if ($question->correctOptionsCount() == $userCorrectAnswers) {
                    $score++;
                }
            }
            $result = new Result();
            $result->user_id = Auth::user()->id;
            $result->topic_id = $request->input('topic_id');
            $result->correct_answers = $score;
            $result->questions_count = count($request->input('question_id'));
            $result->save();

            foreach ($questions as $key => $value) {
                foreach ($value as $answerKey => $answerValue) {
                    $userOption = new UserOption();
                    $result->user_id = Auth::user()->id;
                    $userOption->result_id = $result->id;
                    $userOption->question_id = $key;
                    $userOption->topic_id = $request->input('topic_id');
                    $userOption->option_id = $answerKey;
                    $userOption->save();
                }
            }

            return redirect(route('results.show', $result->id));
        } else {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $result = Result::find($id);
        return view('frontend.quiz.results.show', compact('result'));

    }

    public function result($id)
    {
        $allResults = Result::where('user_id',Auth::id())->get();

        return view('frontend.quiz.results.index', compact('allResults'));
    }

}
