<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
  public function user_profile()
  {

    $users = User::all();


    return view('frontend.pages.user_profile',compact('users'));
  }
}
