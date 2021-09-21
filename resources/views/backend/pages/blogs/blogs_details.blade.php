@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Blogs</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Blogs Details</li>
    </ul>
  </div>
  <!-- Card -->
  <div class="row match-height">
    <!-- Base Nav starts -->
    <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{{$blogs->blogs_title}}</h4>
          <a class="float-right" href="{{route('manage-blogs')}}"><i class="fa fa-home fa-2x"></i></a>
        </div>

        <div class="card-body">

          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="/admin/home/blogs/details/blogs_subtitile_info/{{$blogs->id}}">Blogs Subtitle Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/admin/home/blogs/details/media/{{$blogs->id}}">Media</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="/admin/home/blogs/details/learning_outcomes/{{$blogs->id}}">Learning Outcomes Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/admin/home/blogs/details/benifits/{{$blogs->id}}">Benifit Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/admin/home/blogs/details/need/{{$blogs->id}}">Why Need Content</a>
            </li>



          </ul>
        </div>
      </div>
    </div>
    <!-- Base Nav ends -->


  </div>


</div>

@endsection
