<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()


    {

      return view('frontend.users.cart');
    }
    public function add_cart(Request $request)
    {


          $course_id = $request->course_id;
          $user_id = $request->user_id;




          $cart = new Cart();
          $cart->course_id = $course_id;

          $cart->user_id= $user_id;


          //$service->title=$title;
          //$service->desciption2=$description2;
        //  $service->image_two= $image_two;

          $cart->save();


          return back()->with('category_added','Category record has been added successfully!');

        }
    
}
