<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\MainCategory;
use App\Models\Course;
use App\Models\CourseOverview;
use App\Models\Section;
use App\Models\Lesson;

class UserEnrollmentController extends Controller
{
    public function index($id)

    {

        $course_categories= CourseCategory::all();
        $main_categories= MainCategory::all();
        $course= Course::find($id);
        $section= Section::where('course_id',$id)->first();
        $course_details= CourseOverview::where('course_id',$id)->get();
        $sections= Section::where('course_id',$id)->get();
        $lessons= Lesson::where('course_id',$id)->get();

        $vimeo_ids= Course::
        leftJoin('lessons', 'courses.id', '=', 'lessons.course_id')
            ->where('courses.id',$id)
            ->get()->pluck('vimeo_id');

        return view('/frontend/users/user_enrollment',compact('course_categories','main_categories','course','section','course_details','sections','lessons','vimeo_ids'));
    }

    public function getVimeoId(Request $request){
        //dd($request->course_id);
       return $course= Course::
            leftJoin('lessons', 'courses.id', '=', 'lessons.course_id')
            ->where('courses.id',$request->course_id)
            ->get()->pluck('vimeo_id');
        //dd($course);
    }


}
