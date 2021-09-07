<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\MainCategory;
use App\Models\CourseCategory;
use App\Models\ClassroomCourse;

class ClassroomCourseController extends Controller
{
    public function Manage()

    {
      $classroom_courses= ClassroomCourse::all();
      $course_categories= CourseCategory::all();
      $main_categories= MainCategory::all();
      $classroom_courses= ClassroomCourse::paginate(10);



      return view('backend.pages.classroom_courses.manage',compact('course_categories','main_categories','classroom_courses'));
    }
    public function StoreCourse(Request $request)
    {
      $main_category_id = $request->main_category_id;
      $course_category_id = $request->course_category_id;


      $classroom_course_title=$request->classroom_course_title;
      $training_fee=$request->training_fee;
      $exam_fee=$request->exam_fee;

      $status = $request->status;


      $classroom_course_image =$request->file('file');
      $filename=null;
      if ($classroom_course_image) {
          $filename = time() . $classroom_course_image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'Classroom courses/',
              $classroom_course_image,
              $filename
          );


      }

      $classroom_course = new ClassroomCourse();
      $classroom_course->main_category_id = $main_category_id;
      $classroom_course->course_category_id =$course_category_id;

      $classroom_course->classroom_course_title=$classroom_course_title;
      $classroom_course->training_fee=$training_fee;
      $classroom_course->exam_fee=$exam_fee;

      $classroom_course->status= $status;

      $classroom_course->classroom_course_image= $filename;


      $classroom_course->save();
      return back()->with('course_added','Course record has been added successfully!');


    }
    public function editCourse($id)
    {

      $course_categories= CourseCategory::all();
      $main_categories= MainCategory::all();
      $classroom_courses = ClassroomCourse::find($id);
      return view('/backend/pages/classroom_courses.edit',compact('classroom_courses','main_categories','course_categories'));
    }
    public function updateCourse(Request $request)
    {
      $main_category_id = $request->main_category_id;
      $course_category_id= $request->course_category_id;

      $classroom_course_title=$request->classroom_course_title;
      $training_fee= $request->training_fee;
      $exam_fee= $request->exam_fee;
      $classroom_course_image =$request->file('file');
      $filename=null;
      if ($classroom_course_image) {
          $filename = time() . $classroom_course_image->getClientOriginalName();

          Storage::disk('public')->putFileAs(
              'courses/',
              $classroom_course_image,
              $filename
          );


      }


      $status = $request->status;

      $course_categories= CourseCategory::all();
      $main_categories= MainCategory::all();
      $classroom_course = ClassroomCourse::find($request->id);
      $classroom_course->main_category_id = $main_category_id;
      $classroom_course->course_category_id= $course_category_id;

      $classroom_course->classroom_course_title= $classroom_course_title;
      $classroom_course->exam_fee= $exam_fee;
      $classroom_course->training_fee= $training_fee;
      $classroom_course->classroom_course_image= $filename;

      $classroom_course->status= $status;


      $classroom_course->save();
      return back()->with('course_updated','Course record has been updated successfully!');
    }
    public function deleteCourse($id)
    {
      $classroom_course = ClassroomCourse::find($id);

      $classroom_course->delete();
      return back()->with('course_deleted','Course record has been deleted successfully!');
    }

    public function CourseDetailsBackend($id)
    {

      $classroom_courses= ClassroomCourse::find($id);

      return view('backend.pages.classroom_courses.course_details',compact('classroom_courses'));
    }
  }
