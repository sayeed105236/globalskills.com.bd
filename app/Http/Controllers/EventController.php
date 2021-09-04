<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
  {

    return view('frontend.pages.event');

  }
  public function event_details()
  {

    return view('frontend.pages.event_details');

  }
}
