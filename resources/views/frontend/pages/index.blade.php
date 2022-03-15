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
<!-- contact area END -->

<!-- Content END-->


@endsection
