<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
  public function index()
  {

    return view('frontend.pages.blogs');

  }
  public function blogs_details()
  {

    return view('frontend.pages.blogs_details');

  }
}
