@extends('admin.admin_master')


@section('admin_dashboard_content')

<div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Course Details</h4>
  <ul class="db-breadcrumb-list">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
    <li>{{$classroom_course->classroom_course_title}} </li>
  </ul>
</div>


<div class="row match-height">
  <!-- Base Nav starts -->
  <div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">{{$classroom_course->classroom_course_title}}</h4>
      </div>
      <div class="card-body">

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active"  href="/admin/home/classroom/courses/course_details/course_info/{{$classroom_course->id}}">Course Info</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" style="color:red;" href="/admin/home/classroom/courses/course_details/course_media/{{$classroom_course->id}}">Media</a>
          </li>
          <a class="btn btn-primary" href=" /admin/home/classroom/courses/course_details/{{$classroom_course->id}}" >Back</a>


        </ul>
      </div>
    </div>
  </div>
  <!-- Base Nav ends -->


</div>
<br>
<div class="card col-md-12 d-flex justify-content-center">
  <div class="row">
    <div class="col-md-6">
      <br>

      <h5 class="text-center">Course Thumbnails</h5>
      <hr>
      <div class="avatar-group">
        <div
          data-toggle="tooltip"
          data-popup="tooltip-custom"
          data-placement="top"
          title=""
          class="avatar pull-up my-0"
          data-original-title=""
        >
          <img
            src="{{asset("storage/Classroom courses/$classroom_course->classroom_course_image")}}"
            alt="image"
            height="300"
            width="600"

          />
        </div>
   </div>
   <br>
   <br>
   <div class="text-center">
     <a  href="#" data-toggle="modal" data-target="#ClassroomCourseThumbnalisEditModal"><i class="fas fa-edit"></i>Edit</a>
     @include('backend.modals.classroomcourse_media_editmodal')

   </div>

  </div>
  <div class="col-md-6">
    <br>

    <h5 class="text-center">Banner Thumbnails</h5>
    <hr>
    <div class="avatar-group">
      <div
        data-toggle="tooltip"
        data-popup="tooltip-custom"
        data-placement="top"
        title=""
        class="avatar pull-up my-0"
        data-original-title=""
      >
        <img
          src="{{asset("storage/Classroomk Courses/banners/$classroom_course_details->classroom_banner_image")}}"
          alt="image"
          height="300"
          width="600"

        />
      </div>
 </div>

 <br>
 <br>
 <div class="text-center">
   <a  href="#"  data-toggle="modal" data-target="#ClassroomCourseBannerThumbnalisEditModal"><i class="fas fa-edit"></i>Edit</a>
   @include('backend.modals.classroomcoursebanner_media_editmodal')

 </div>


</div>



  </div>
  </div>

<br>
<br><br>

















@endsection
