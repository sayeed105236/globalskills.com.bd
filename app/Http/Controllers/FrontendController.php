<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\ClassroomCourse;

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
  public function index_classroom()
  {
    $main_categories= MainCategory::all();
    $course_categories= CourseCategory::all();
    $classroom_courses= ClassroomCourse::all();
    $classroom_courses = ClassroomCourse::paginate(9);
    return view('frontend.pages.classroom_courses',compact('main_categories','course_categories','classroom_courses'));

  }
  public function course_details_frontend()
  {


    return view('frontend.pages.classroom_course_details');
  }
}
