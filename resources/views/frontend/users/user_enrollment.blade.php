@extends('frontend.layouts.master')


@section('content')
<div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}});">
    <div class="container">
        <div class="page-banner-entry">
          <br/>
          <br/>




            <h1 class="text-white">{{$course->course_title}}</h1>

 </div>
    </div>
</div>

<!-- Breadcrumb row -->
<div class="breadcrumb-row">
<div class="container">
<ul class="list-inline">
  <li><a href="{{route('course_details')}}">Home</a></li>
  <li><a href="#">Courses</a></li>
  <li>{{$course->course_title}}</li>
</ul>
</div>
</div>
<div class="content-block">
        <!-- About Us -->
  <div class="section-area section-sp1">
            <div class="container">
       <div class="row d-flex flex-row-reverse">
        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
          <div class="m-b30" id="curriculum">
            <h4>Curriculum</h4>
            <ul class="curriculum-list">
                @foreach($sections as $row)
                <li>
                  <h5>{{$row->section_name}}</h5>
                  <ul>
                    @foreach($lessons as $lesson)

                    <li>
                      <div class="curriculum-list-box">
                        <span>Lesson: </span><a id="{{$lesson->id}}" >{{$lesson->lesson_title}}</a>
                      </div>
                      <span>120 minutes</span>
                    </li>

                    @endforeach
                  </ul>
                </li>


                @endforeach
              </ul>
          </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-12">
          <div class="courses-post">
            <div class="ttr-post-media media-effect">
              @foreach($lessons as $lesson)

  <div data-vimeo-id="{{$lesson->vimeo_id}}" data-vimeo-width="800" data-vimeo-height="500" id="{{$lesson->id}}"></div>
              @endforeach

            </div>
            <div class="ttr-post-info">
              <div class="ttr-post-title ">
                <h2 class="post-title">{{$course->course_title}}</h2>
              </div>
              <div class="ttr-post-text">
                <p>{{$course->course_details->short_description}}</p>
              </div>
            </div>
          </div>
          <div class="courese-overview" id="overview">
            <h4>Overview</h4>
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <ul class="course-features">
                  <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
                  <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">{{$course->course_details->quiz}}</span></li>
                  <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
                  <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">{{$course->course_details->skill}}</span></li>
                  <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">{{$course->course_details->language}}</span></li>
                  <li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
                  <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
                </ul>
              </div>
              <div class="col-md-12 col-lg-8">
                <h5 class="m-b5">Course Description</h5>
                <p>{{$course->course_details->course_description}}</p>
                <h5 class="m-b5">Certification</h5>
                <p>{{$course->course_details->certification}}</p>
                <h5 class="m-b5">Learning Outcomes</h5>
                <ul class="list-checked primary">
                  <li>{{$course->course_details->learning_outcomes}}</li>

                </ul>

              </div>
            </div>
          </div>

          <div class="" id="instructor">
            <h4>Instructor</h4>
            <div class="instructor-bx">
              <div class="instructor-author">
                <img src="{{ asset('images/testimonials/pic1.jpg')}}" alt="">
              </div>
              <div class="instructor-info">
                <h6>{{$course->course_details->instructor_id}}</h6>
                <span>Professor</span>
                <ul class="list-inline m-tb10">
                  <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
              </div>
            </div>
            <div class="instructor-bx">
              <div class="instructor-author">
                <img src="{{ asset('images/testimonials/pic2.jpg')}}" alt="">
              </div>
              <div class="instructor-info">
                <h6>Keny White </h6>
                <span>Professor</span>
                <ul class="list-inline m-tb10">
                  <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
              </div>
            </div>
          </div>
          <div class="" id="reviews">
            <h4>Reviews</h4>

            <div class="review-bx">
              <div class="all-review">
                <h2 class="rating-type">3</h2>
                <ul class="cours-star">
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li class="active"><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>3 Rating</span>
              </div>
              <div class="review-bar">
                <div class="bar-bx">
                  <div class="side">
                    <div>5 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:90%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>150</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>4 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:70%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>140</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>3 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:50%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>120</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>2 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:40%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>110</div>
                  </div>
                </div>
                <div class="bar-bx">
                  <div class="side">
                    <div>1 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5" style="width:20%;"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>80</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
        </div>
    </div>

    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        var iframe = document.querySelector('iframe');
        var player = new Vimeo.Player(iframe);

        player.on('play', function() {
            console.log('played the video!');
        });

        player.getVideoTitle().then(function(title) {
            console.log('title:', title);
        });
    </script>

@endsection
