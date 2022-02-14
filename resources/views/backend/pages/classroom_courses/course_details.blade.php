@extends('admin.admin_master')


@section('admin_dashboard_content')

<div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Course Details</h4>
  <ul class="db-breadcrumb-list">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
    <li>{{$classroom_courses->classroom_course_title}} </li>
  </ul>
</div>


<div class="row match-height">
  <!-- Base Nav starts -->
  <div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">{{$classroom_courses->classroom_course_title}}</h4>
      </div>
      <div class="card-body">

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/admin/home/classroom/courses/course_details/course_info/{{$classroom_courses->id}}">Course Info</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="/admin/home/classroom/courses/course_details/course_media/{{$classroom_courses->id}}">Media</a>
          </li>
          <?php
          $course_details= App\Models\ClassroomInfo::where('classroom_course_id',$classroom_courses->id)->first();
          //dd($course_details);

           ?>
           @if($course_details == null)
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ClassroomCourseDetailsAddModal"><i class="fas fa-plus-circle"></i></a>
              @include('backend.modals.classroom_course_detailsaddmodal')
              @endif
        </ul>
      </div>
    </div>
  </div>
  <!-- Base Nav ends -->


</div>



















@endsection
