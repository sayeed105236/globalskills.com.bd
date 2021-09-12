<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;
use App\Models\ClassroomCourse;
use Auth;
class Cart extends Model
{
    use HasFactory;
      protected $table ="carts";

          public function course(){
            return $this->belongsTo(Course::class, 'course_id');
          }
          public function classroom_course(){
            return $this->belongsTo(Course::class, 'classroom_course_id');
          }

          public function user(){
            return $this->belongsTo(User::class, 'user_id');
          }

          public function order(){
            return $this->belongsTo(Order::class, 'order_id');
          }
          public function totalItems()
          {
            if (Auth::check()) {
              $carts =Cart::orWhere('user_id',Auth::id())
              ->orWhere('ip_address', request()->ip())->get();
            }else{

              $carts = Cart::orWhere('ip_address',request()->ip())->get();
            }

            $total_item = 0;
            foreach($carts as $cart)
            {
              $total_items += $cart;
            }
            return $total_item;

          }

}
