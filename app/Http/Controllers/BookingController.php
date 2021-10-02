<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ClassroomCourse;
use App\Models\System;
use Auth;
use App\Models\Booking;

class BookingController extends Controller
{
  public function StoreBooking(Request $request)
  {


        $classroom_course_id = $request->classroom_course_id;
        $course_category_id=$request->course_category_id;
        $user_id = $request->user_id;
        $ip_address=$request->ip();
        //dd($request);



          if (Auth::check()) {

                      $booking= Booking::where('user_id',Auth::id())

                                  ->where('classroom_course_id',$request->classroom_course_id)

                                  ->first();
          }

                      $booking = new Booking();

                      if (Auth::check()) {
                        $booking->user_id= Auth::id();
                        $booking->classroom_course_id = $classroom_course_id;
                        $booking->course_category_id= $course_category_id;
                        $booking->ip_address= $ip_address;


                        $booking->save();
                          return back()->with('booking_added','You have booked the course successfully! You will get an email or phone after confirmation. For any queries call at +8801766343434');
                      }else {
                        return Redirect('register');
                      }

      }
     public function BookingList()
      {
       $bookings = Booking::orderBy('id','DESC')->get();
       $data= Booking::paginate(10);


      return view('backend.pages.booking_list',compact('bookings','data'));
      }

}
