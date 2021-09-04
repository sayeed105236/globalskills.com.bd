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


<h4 class="center">{{$course->course_title}}</h4>
</div>
  <div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="container" >


        <h4 class="card-title" >Course Info</h4>
        </div>
      <div class="card-body">
        <ul class="nav nav-pills nav-fill">




        </ul>
        <div class="tab-content">
          <div
            role="tabpanel"
            class="tab-pane active"
            id="home-fill"
            aria-labelledby="home-tab-fill"
            aria-expanded="true"
          >
          <section>
            <br/>




          <form action="{{route('update-course')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$course->id}}">
              <div class="form-group">
                <label for="categorytitle">Course Title</label>
                <input type="text" class="form-control" value="{{$course->course_title}}" name="course_title" aria-describedby="categorytitle" placeholder="Enter title">

              </div>
              <div class="form-group">
                  <label for="exampleFormControlFile1">Course Thumbnails</label>
                    <input type="file" name="file" class="form-control-file" id="course_image" onchange="previewImage(this)">
              </div>

              <div class="form-group">
                <label for="custom select">Select Course Category</label>
                <select class="form-control" name="course_category_id" >
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
                <label for="regular_price">Regular Price</label>
                <input type="number" class="form-control" name="regular_price" aria-describedby="regular_price" placeholder="Enter Price" value="{{$course->regular_price}}">

              </div>
              <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input type="number" class="form-control" name="sale_price" aria-describedby="sale_price" placeholder="Enter Sale Price" value="{{$course->sale_price}}">

              </div>

              <div class="form-group">
                <label for="custom select">Status</label>
                <select class="form-control" name="status">

                  <option value="1">Active</option>
                  <option value="0">Inactive</option>

                </select>
              </div>



        </div>


          <button type="submit" class="btn btn-primary">Save changes</button>

          </form>

          </section>


          </div>


        </div>
      </div>
    </div>
    <br/>
    <br/>

    
  </div>







<script src="{{asset('admin/js/components-navs.js')}}"></script>


@endsection
