<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
Use App\Models\User;

class UserController extends Controller
{
    public function List()
    {
      $users= User::all();
      $course_list =  Course::all();
      return view('backend.pages.user_list',compact('course_list','users'));
    }
    public function deleteUser($id)
    {
      $user = User::find($id);

      $user->delete();
      return back()->with('user_deleted','User record has been deleted successfully!');
    }
}
