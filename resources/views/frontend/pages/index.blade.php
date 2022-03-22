@extends('frontend.layouts.master')


@section('content')

<!-- Content -->
  <!-- Main Slider -->
@include('frontend.content.sliders')
    <!-- Main Slider -->
<div class="content-block">

  <!-- Our Services -->
  @include('frontend.content.inner_service')

  <!-- E-learning Courses -->
  @include('frontend.content.e-learning')
  <!-- E-learning Courses END -->

  <!-- Classroom -->
  @include('frontend.content.classroom')
  <?php
  $mocktest= App\Models\mockTestCategory::all();
  //dd($mocktest < 0);

   ?>
  <!-- Classroom -->
  <?php if ($mocktest > null): ?>


  @include('frontend.content.mocktest')
  <!--@include('frontend.content.training_without_exam')-->
  <?php endif; ?>
  @include('frontend.content.accreditation')

  <!-- Mock Test -->

  <br>
  <br>

  <!-- Mock Test -->

  <!-- Form -->
  @include('frontend.content.overview_banner')

  <!-- Form END -->
  @include('frontend.content.events')


  <!-- Testimonials -->


  <!-- Testimonials END -->

  <!-- Recent News -->
  @include('frontend.content.recent_news')
  <br><br>
  <script src="{{asset('js/google.js')}}" defer></script>
  <div class="elfsight-app-0fea9826-bb05-44ec-9de8-a0d76565257f"></div>

  <!-- Recent News End -->


    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Video</h4>
                <div class="video-player" id="plyr-video-player">
                    <iframe class="yvideo" width="420" height="345" src="https://www.youtube-nocookie.com/embed/cPVgwz5aN1o?autoplay=1&rel=0&showinfo=0" allowfullscreen allow="autoplay"></iframe>
<input src="" width="854" height="60" allowfullscreen>
                </div>

            </div>
        </div>
    </div>
    <iframe width="854" style="position: absolute" height="480" src="https://www.youtube-nocookie.com/embed/cPVgwz5aN1o?autoplay=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
<!-- contact area END --><input src="" width="854" height="60" allowfullscreen>
<!-- <input type="text" style="position: relative; width:854px; height: 60px; background-color: black" name="" value="" disabled  allowfullscreen> -->
<!-- Content END-->


@endsection
