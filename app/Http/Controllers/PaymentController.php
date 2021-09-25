<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Payment;
use App\Models\User;

class PaymentController extends Controller
{

    public function payment(Request $request){
        $course=Course::find($request->id);
        $user=User::find($request->id);
   return view('backend.pages.courses.course_details_index',compact('course'));
 }
 public function paymentInfo(Request $request){

     if($request->tx){
         if($payment=Payment::where('transaction_id',$request->tx)->first()){
             $payment_id=$payment->id;
         }else{
             $payment=new Payment;
             $payment->course_id=$request->course_id;
             $payment->invoice_id=$request->invoice_id;
             $payment->payment_method->$request->enrollement_id;
             

             $payment->save();
             $payment_id=$payment->id;
         }

     return 'Pyament has been done and your payment id is : '.$payment_id;
     }else{
         return 'Payment has failed';
     }
 }
}
