@extends('admin.admin_master')


@section('admin_dashboard_content')

<div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Course Details</h4>
  <ul class="db-breadcrumb-list">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
    <li>{{$course->course_title}} </li>
  </ul>
</div>


<div class="row match-height">
  <!-- Base Nav starts -->
  <div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">{{$course->course_title}}</h4>
      </div>
      <div class="card-body">

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/admin/home/courses/course_details/course_info/{{$course->id}}">Course Info</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/admin/home/courses/course_details/course_curricullum/{{$course->id}}">Course Curricullum</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="color:red;" href="/admin/home/courses/course_details/course_media/{{$course->id}}">Media</a>
          </li>

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
            src="{{asset("storage/courses/$course->course_image")}}"
            alt="image"
            height="300"
            width="600"

          />
        </div>
   </div>
   <br>
   <br>
   <div class="text-center">
     <a  href="#" data-toggle="modal" data-target="#CourseThumbnalisEditModal"><i class="fas fa-edit"></i>Edit</a>
     @include('backend.modals.course_media_editmodal')
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
          src="{{asset('storage/courses/banners/'.$course->course_details->banner_image)}}"
          alt="image"
          height="300"
          width="600"

        />
      </div>
 </div>

 <br>
 <br>
 <div class="text-center">
   <a  href="#"  data-toggle="modal" data-target="#CourseBannerThumbnalisEditModal"><i class="fas fa-edit"></i>Edit</a>
   @include('backend.modals.course_media_bannerthumnailseditmodal')
 </div>


</div>



  </div>
  </div>

<br>
<br><br>


















@endsection
