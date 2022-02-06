<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\mockTestCategory;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function create()
    {

        $courses = mockTestCategory::orderBy('mock_category','ASC')->get();
        $topics = Topic::latest()->get();
        return view('backend.quiz.topics.create',compact('courses','topics'));
    }

    public function view($id)
    {
        $topic = Topic::find($id);

        return view('backend.quiz.topics.view',compact('topic'));
    }

    public function store(Request $request){
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',

        ],[
            'title.required' => 'Please input topic',

        ]);

        Topic::insert([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'timer' =>$request->timer,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Topic Added Success',
            'alert-type' =>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function index(){
        $topics = Topic::all();
        return view('backend.quiz.topics.index',compact('topics'));
    }
    public function edit($id){
        $topic = Topic::findOrFail($id);
        return view('backend.quiz.topics.edit',compact('topic'));
    }

    public function update(Request $request){
        $id = $request->topic_id;
        Topic::findOrFail($id)->Update([
            'title' => $request->title,
            'time' => $request->time,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Topic Update Success',
            'alert-type' =>'success'
        );
        return Redirect()->route('topics-show')->with($notification);

    }

    public function delete($id){
        Topic::findOrFail($id)->delete();
        $notification=array(
         'message'=>'Topic Delete Success',
         'alert-type'=>'success'
     );
     return Redirect()->back()->with($notification);
    }


    public function getSubCat($cat_id){
        $subcat = Topic::where('course_id',$cat_id)->orderBy('title','ASC')->get();
        return json_encode($subcat);
    }

}
