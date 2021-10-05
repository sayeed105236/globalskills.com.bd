<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Division\Division;
use Illuminate\Http\Request;
Use App\Models\User;
use Throwable;

class UserController extends Controller
{
    public function List()
    {
      $courses= Course::all();
      $users= User::all();
        $data['course']     = ['' => ''] + Course::getAllCoursesArray();
      return view('backend.pages.user_list',compact('data','users'));

    }
    public function deleteUser($id)
    {
      $user = User::find($id);

      $user->delete();
      return back()->with('user_deleted','User record has been deleted successfully!');
    }
    public function getProductPrice(Request $request)
    {
        try {
            $course_detail = Course::where('id',$request->course_id)->first();

            return json_encode($course_detail);
        } catch (Throwable $e) {
            return false;
        }
    }
    public function storeEnrollCourse(Request $request)
    {
        dd($request->all());
    }
}
