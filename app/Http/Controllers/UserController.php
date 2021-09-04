<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class UserController extends Controller
{
    public function List()
    {
      $users= User::all();
      return view('backend.pages.user_list',compact('users'));
    }
    public function deleteUser($id)
    {
      $user = User::find($id);

      $user->delete();
      return back()->with('user_deleted','User record has been deleted successfully!');
    }
}
