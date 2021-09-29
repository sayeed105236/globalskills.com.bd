<?php

namespace App\Models;
use App\Models\Course;
use App\Models\CourseCategory;
use Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table ="checkpouts";
    public function course(){
      return $this->belongsTo(Course::class, 'course_id');
    }


    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
    public function course_category()
    {
      return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
    Static  public function checkout()
      {
        if (Auth::check()) {
          $checkout =Checkout::orWhere('user_id',Auth::id())
          ->orWhere('ip_address', request()->ip())->get();
        }else{

          $checkout = Checkout::orWhere('ip_address',request()->ip())->get();
        }


        return $checkout;

      }

}
