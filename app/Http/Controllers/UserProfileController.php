<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
  public function user_profile()
  {
    return view('frontend.pages.user_profile');
  }
}
