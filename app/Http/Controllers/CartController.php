<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Course;
use App\Models\ClassroomCourse;
use Auth;

class CartController extends Controller
{
    public function index()


    {

      return view('frontend.users.cart');
    }
    public function add_cart(Request $request)
    {


          $course_id = $request->course_id;
          $classroom_course_id=$request->classroom_course_id;
          $user_id = $request->user_id;
          $ip_address=$request->ip();




          $cart = new Cart();

          if (Auth::check()) {
            $cart->user_id= Auth::id();
          }
          $cart->course_id = $course_id;
          $cart->classroom_course_id= $classroom_course_id;
          $cart->ip_address= $ip_address;


          $cart->save();


          return back()->with('category_added','Category record has been added successfully!');

        }

}
