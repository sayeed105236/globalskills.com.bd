<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\CourseCategory;
use App\Models\Course;

class FrontendController extends Controller
{
  public function index()
  {
    $main_categories= MainCategory::all();
    $course_categories= CourseCategory::all();
    $courses= Course::all();
    $courses = Course::paginate(9);
    return view('frontend.pages.courses',compact('main_categories','course_categories','courses'));

  }
  public function course_details()
  {


    return view('frontend.pages.course_details');
  }
}
