<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBlog;

class BlogsController extends Controller
{
  public function index()
  {

    return view('frontend.pages.blogs');

  }
  public function blogs_details()
  {

    return view('frontend.pages.blogs_details');

  }

  public function blogs_details_index($id)
  {

    $blogs= AdminBlog::find($id);
    $lts_blogs =AdminBlog::find($id)->latest()->limit(3)->get();
    return view('frontend.users.blog_details',compact('blogs','lts_blogs'));
  }
  public function Store(Request $request)
  {

    $training_course = new TrainingCourse();
    $training_course->main_category_id= $request->main_category_id;
    $training_course->course_category_id=$request->course_category_id;
    $training_course->course_title= $request->course_title;
    $training_course->training_fee= $request->training_fee;
    $training_course->short_description=$request->short_description;
    $training_course->course_description=$request->course_description;
    $training_course->learning_outcomes=$request->learning_outcomes;
    $training_course->status=$request->status;
    $training_course->image= $filename;
    $image =$request->file('file');
    $filename=null;
    if ($image) {
        $filename = time() . $image->getClientOriginalName();

        Storage::disk('public')->putFileAs(
            'Training Courses/',
            $image,
            $filename
        );


    }
    $training_course->save();
    return response()->json($training_course);

  }
}
