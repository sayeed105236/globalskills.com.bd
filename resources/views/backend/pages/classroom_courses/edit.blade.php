@extends('admin.admin_master')

@section('admin_dashboard_content')




<div class="container-fluid">
<div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Edit Courses</h4>
  <ul class="db-breadcrumb-list">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
    <li>Edit Courses</li>
  </ul>
</div>
<!-- Card -->
<div class="container">


<h4 class="center">{{$classroom_courses->classroom_course_title}}</h4>
</div>


<div class="col-xl-8 col-lg-12">

@if(Session::has('course_updated'))
<div class="alert alert-success" role="alert">

  <div class="alert-body">
    {{Session::get('course_updated')}}
  </div>
</div>
@endif

  <div class="card">
    <br>
    <div class="container" >


      <h4 class="card-title">Course Info</h4>
      </div>
    <div class="card-body">
      <form action="{{route('update-classroom-course')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$classroom_courses->id}}">

          <div class="form-group">
            <label for="classroom_course_title">Course Title</label>
            <input type="text" class="form-control" value="{{$classroom_courses->classroom_course_title}}" name="classroom_course_title" aria-describedby="classroom_course_title" placeholder="Enter title">

          </div>
          <div class="form-group">
              <label for="exampleFormControlFile1">Course Thumbnails</label>
                <input type="file" name="file" class="form-control-file" id="classroom_course_image" onchange="previewImage(this)">
          </div>
          <div class="form-group">
            <label for="custom select">Select Course Category</label>
            <select class="form-control" name="course_category_id">
              <option label="Choose category"></option>
              <?php foreach ($course_categories as $course_category): ?>
                <option value="{{$course_category->id}}">{{$course_category->mcategory_title}}</option>

              <?php endforeach; ?>




            </select>
          </div>
          <div class="form-group">
            <label for="validationCustom04" class="form-label">Select Main Category</label>
            <select class="form-control" name="main_category_id">
              <option label="Choose main category"></option>
              <?php foreach ($main_categories as $main_category): ?>
                <option value="{{$main_category->id}}">{{$main_category->mcategory_title}}</option>

              <?php endforeach; ?>





            </select>
          </div>
          <div class="form-group">
            <label for="training_fee">Training Fee</label>
            <input type="number" class="form-control" name="training_fee" aria-describedby="training_fee" placeholder="Enter Training Fee" value="{{$classroom_courses->training_fee}}">

          </div>
          <div class="form-group">
            <label for="sale_price">Exam Fee</label>
            <input type="number" class="form-control" name="exam_fee" aria-describedby="exam_fee" placeholder="Enter Exam Fee" value="{{$classroom_courses->exam_fee}}">

          </div>

          <div class="form-group">
            <label for="custom select">Status</label>
            <select class="form-control" name="status">

              <option value="1">Active</option>
              <option value="0">Inactive</option>

            </select>
          </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>



    </div>
  </div>
  <br/>
  <br/>


</div>


</div>






@endsection
