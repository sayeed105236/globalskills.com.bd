@extends('frontend.layouts.master')

@section('content')


    <div class="page-content bg-white">

        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">

        </div>
        <!-- Breadcrumb row -->

        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Mock Details</li>
                    <li>Topics</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- inner page banner END -->
        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">

                    <h3 class="page-title">Topics</h3>
                    <div class="row">

                        @foreach($topics as $topic)
                            <div class="col-sm-3">
                              <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $topic->title }}</h5>
                                    <h6 class="card-title">Time: {{$topic->timer}} minutes</h6>
                                    <a href="{{ url('topic/questions/view/'.$topic->id) }}" class="inline_block btn btn-primary">Go
                                        To Quiz</a>
                                </div>
                              </div>
                            </div>



                          @endforeach



                    </div>

                </div>
            </div>
        </div>
        <!-- contact area END -->

    </div>
@endsection
