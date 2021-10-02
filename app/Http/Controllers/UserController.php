<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
Use App\Models\User;

class UserController extends Controller
{
    public function List()
    {
      $courses= Course::all();
      $users= User::all();

      return view('backend.pages.user_list',compact('courses','users'));

    }
    public function deleteUser($id)
    {
      $user = User::find($id);

      $user->delete();
      return back()->with('user_deleted','User record has been deleted successfully!');
    }
}
