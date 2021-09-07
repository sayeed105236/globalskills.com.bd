@extends('frontend.layouts.master')


@section('content')



<!-- Content -->

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner3.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
              <br/>
              <br/>
                <h1 class="text-white">Our Classroom Courses</h1>
     </div>
        </div>
    </div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
  <div class="container">
    <ul class="list-inline">
      <li><a href="{{route('home')}}">Home</a></li>
      <li>Our Classroom Courses</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb row END -->
    <!-- inner page banner END -->
<div class="content-block">
        <!-- About Us -->
  <div class="section-area section-sp1">
            <div class="container">
       <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
          <div class="widget courses-search-bx placeani">
            <div class="form-group">
              <div class="input-group">
                <label>Search Courses</label>
                <input name="dzName" type="text" required class="form-control">
              </div>
            </div>
          </div>
          <div class="widget widget_archive">
                            <h5 class="widget-title style-1">All Courses Categories</h5>
                            <ul>
                                <li class="active"><a href="#">General</a></li>

                                @foreach($course_categories as $row)
                                <li><a href="#">{{$row->mcategory_title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
          <div class="widget">
            <a href="#"><img src="{{ asset('images/adv/adv.jpg')}}" alt=""/></a>
          </div>
          <div class="widget recent-posts-entry widget-courses">
                            <h5 class="widget-title style-1">Recent Courses</h5>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="ttr-post-media"> <img src="{{ asset('images/blog/recent-blog/pic1.jpg')}}" width="200" height="143" alt=""> </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-header">
                                            <h6 class="post-title"><a href="#">Introduction EduChamp</a></h6>
                                        </div>
                                        <div class="ttr-post-meta">
                                            <ul>
                                                <li class="price">
                                                  <del>$190</del>
                                                  <h5>$120</h5>
                                                </li>
                                                <li class="review">03 Review</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="ttr-post-media"> <img src=" {{ asset('images/blog/recent-blog/pic3.jpg')}}" width="200" height="160" alt=""> </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-header">
                                            <h6 class="post-title"><a href="#">English For Tommorow</a></h6>
                                        </div>
                                        <div class="ttr-post-meta">
                                            <ul>
                                                <li class="price">
                        <h5 class="free">Free</h5>
                      </li>
                                                <li class="review">07 Review</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12">
          <div class="row">
            @foreach($classroom_courses as $row)
            @if($row->status==1)
            @if($row->main_category->id==2)
            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
              <div class="cours-bx">
                <div class="action-box">
                  <img src="{{asset("storage/Classroom courses/$row->classroom_course_image")}}" alt="">
                  <a href="#" class="btn">Read More</a>
                </div>
                <div class="info-bx text-center">
                  <h5><a href="#">{{$row->classroom_course_title}}</a></h5>
                  <span>{{$row->course_category->mcategory_title}}</span>
                </div>

                  <div class="cours-more-info">
                    <div class="review">
                      <span></span>
                      <h7>Exam Fee</h7>
                    <h5>{{$row->exam_fee}}৳</h5>
                    </div>
                    <div class="price">
                        <h7>Training Fee</h7>
                      <h5>{{$row->training_fee}}৳</h5>
                    </div>
                  </div>


              </div>
            </div>
            @endif
            @endif
            @endforeach
            <div class="col-lg-12 m-b20">

                {{$classroom_courses->links('frontend.partials.pagination')}}

            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
<!-- contact area END -->

</div>
<!-- Content END-->




@endsection
