@extends('frontend.layouts.master')


@section('content')



<!-- Content -->

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{asset('images/banner/banner3.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
              <br/>
              <br/>

     </div>
        </div>
    </div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
  <div class="container">
    <ul class="list-inline">
      <li><a href="{{route('home')}}">Home</a></li>
      <li>Request Certificate</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb row END -->

    <!-- inner page banner -->
    <div class="page-banner contact-page section-sp2">
        <div class="container">
            <div class="row">
      <div class="col-lg-5 col-md-5 m-b30">
        <div class="bg-primary text-white contact-info-bx">
          <h2 class="m-b10 title-head">Contact <span>Information</span></h2>

          <div class="widget widget_getintuch">
            <ul>
              <li><i class="ti-location-pin"></i>Hayat Rose Park
                  Level 5, House No 16
                  Main Road, Bashundhara Residential Area
                  Dhaka 1229
                  Bangladesh</li>
              <li><i class="ti-mobile"></i>+88 01766 343 434</li>
              <li><i class="ti-email"></i>info@globalskills.com.bd</li>
            </ul>
          </div>
          <h5 class="m-t0 m-b20">Follow Us</h5>
          <ul class="list-inline contact-social-bx">
            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-7">
        <form action="{{route('certificate-request-store')}}" method="POST" >
          @csrf
          

          <div id="res" ></div>
        <div class="ajax-message"></div>
          <div class="heading-bx left">
            <h2 class="title-head">Request for <span>Certificate</span></h2>

          </div>
          <div class="row placeani">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="classroom_course_title">You Name on Certificate</label>
                <input type="text" class="form-control" name="name" aria-describedby="classroom_course_title" placeholder="Enter Your name" data-validation="required">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="classroom_course_title">Your Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="classroom_course_title" placeholder="Enter Your Email Address" data-validation="required">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="classroom_course_title">Your Phone Number</label>
                <input type="number" class="form-control" name="phone" aria-describedby="classroom_course_title" placeholder="Enter Your Phone Number" data-validation="required">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="validationCustom04" class="form-label">Select Course</label>
                <select class="form-control" name="classroom_course_id" data-validation="required">
                  <option label="Choose Course"></option>
                  <?php
                  $classroom_courses= App\Models\ClassroomCourse::all();

                   ?>
                   <?php foreach ($classroom_courses as $row): ?>

                    <option value="{{$row->id}}">{{$row->classroom_course_title}}</option>
                      <?php endforeach; ?>

                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="classroom_course_title">Start Date</label>
                <input data-validation="required" type="date" class="form-control" name="start_date" aria-describedby="classroom_course_title">

              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="classroom_course_title">End Date</label>
                <input data-validation="required" type="date" class="form-control" name="end_date" aria-describedby="classroom_course_title">

              </div>
            </div>

            <div class="col-lg-12">
              <button type="submit" class="btn button-md"> Request For Certificate</button>
            </div>
          </div>
        </form>
        <br>
          <p><strong>You can Order Hard Copy of Certificate (*** BDT 300 will be applicable excluding Vat & Tax ***)</strong></p>
          <a href="#" class="btn btn-success float-right">Order Hard Copy</a>
      </div>

    </div>

        </div>
</div>
    <!-- inner page banner END -->
</div>
<!-- Content END-->



@endsection
