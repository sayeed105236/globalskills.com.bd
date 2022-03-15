
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>

{{-- <style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style> --}}

</head>
<body>
  <div class="container" style="margin-left:200px;" >
      <img src="{{public_path("gsda logo.png")}}" alt="">
  </div>
  <div class="container" >
    <h4 style="margin-left:80px;">{{$evolution->created_at->format('d-m-Y')}}</h4>
  </div>
  <div class="container" >
    <h2 class="text-center" style=" margin-left:150px; marin-top:80px;">LETTER OF COURSE ATTENDANCE</h2>
  </div>
  <div class="container" >
    <p style="margin-left:80px;margin-top:50px;">This letter is to verify that <strong>{{Auth::user()->name}}</strong> has attended
      </p>
      <p style="margin-left:80px; margin-top:50px;"><strong>{{$evolution->course->course_title}}</strong> course, which  took  place  form {{$evolution->start_date->format('d-m-Y')}}  until {{$evolution->end_date->format('d-m-Y')}}
       from  online  self study  platform  of  Global  Skills  Development Agency,
         Dhaka Bangladesh.</p>

  </div>
  <div  class="container" style="margin-left:80px;" >
    <p >‘This  is  a  letter  confirming  course  attendance
      only  and  is  not  a  document  demonstrating
      or certifying
      the achievement of any qualification in the subject matter of
      the training course’.</p>
  </div>
  <div class="container" style="margin-left:80px; margin-top:100px;">
    <p>Course Trainer</p>
    <div style="position:absolute;left:284.50px;top:420.96px;" class="cls_010">
         <span class="cls_010"><img width="90" src="{{ public_path($trainer->signature) }}" alt="Ibrahim Hossain"></span>
     </div>

    <h3>{{(($trainer->name))}}</h3>
  </div>
  <div class="container" style="margin-left:80px; margin-top:180px;">
    <p>{{$evolution->course->accredation_name}}  is a registered trademark of AXELOS Limited,
      used under permission of <p>
      <p style="margin-left:170px;">AXELOS Limited. All rights reserved. </p>
  </div>

  <div class="container"  style="margin-left:40px; margin-top:100px;">

      <p  style="margin-left:20px;">
        Hayat Rose Park Level 5, House No 16 Main Road, Bashundhara Residential Area Dhaka 1229
           <span style="margin-left:170px;">Phone: +8801766343434; Email: info@globalskills.com.bd</span> </p>

  </div>


</body>
</html>
