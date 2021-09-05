<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomCourseController extends Controller
{
    public function Manage()

    {
      return view('backend.pages.classroom_courses.manage');
    }
}
