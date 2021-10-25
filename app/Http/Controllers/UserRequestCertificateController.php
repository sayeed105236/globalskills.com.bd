<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRequestCertificateModel;

class UserRequestCertificateController extends Controller
{
    public function index()
    {
      return view('frontend.pages.request_certificate');
    }
    public function store(Request $request)
    {
      //dd($request);
      $classroom_course_id = $request->classroom_course_id;
    //  $trainer_id=$request->trainer_id;
      $name = $request->name;
      $email= $request->email;
      $phone=$request->phone;
      $start_date=$request->start_date;
      $end_date=$request->end_date;

      $certificate_request = new UserRequestCertificateModel();
      $certificate_request->name = $name;
      //$certificate_request->trainer_id=$trainer_id;
      $certificate_request->email = $email;
      $certificate_request->classroom_course_id= $classroom_course_id;

      $certificate_request->phone = $phone;
      $certificate_request->start_date = $start_date;
      $certificate_request->end_date = $end_date;


      $certificate_request->save();

      $notification=array(
          'message'=>'Your Request has been submitted successfully.... Please Check your email after confirmation!!!',
          'alert-type'=>'success'
      );
        return Redirect()->back()->with($notification);
    }
    public function check()
    {
      $certificate_requests=  UserRequestCertificateModel::all();
      return view('backend.pages.certificate_request',compact('certificate_requests'));
    }
    public function approve($id)
    {
         UserRequestCertificateModel::findOrFail($id)->update([
            'status'=>'approve'
        ]);
        $notification=array(
            'message'=>'Approved!!!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
