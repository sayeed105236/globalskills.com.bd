<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Course;
use App\Models\ClassroomCourse;
use App\Models\System;
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


            if (Auth::check()) {

                        $cart= Cart::where('user_id',Auth::id())

                                    ->where('course_id',$request->course_id)

                                    ->first();
            }else {
              $cart= Cart::where('ip_address',request()->ip())

                          ->where('course_id',$request->course_id)

                          ->first();
            }
                      if (!is_null($cart)) {
                        //

                      }else
                      {
                        $cart = new Cart();

                        if (Auth::check()) {
                          $cart->user_id= Auth::id();
                        }
                        $cart->course_id = $course_id;
                        $cart->classroom_course_id= $classroom_course_id;
                        $cart->ip_address= $ip_address;


                        $cart->save();
                      }



          return back()->with('cart_added','Course has been added to cart successfully!');

        }
        public function deleteCart($id)
        {
          $cart = Cart::find($id);

          $cart->delete();
          return back()->with('cart_deleted','Course has been deleted from cart successfully!');
        }


}
