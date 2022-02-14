@extends('frontend.layouts.master')


@section('content')
<div class="page-content bg-white">
<div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}}')}});">
    <div class="container">
        <div class="page-banner-entry">
          <br/>
          <br/>

 </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
<div class="container">
<ul class="list-inline">
  <li><a href="{{route('home')}}">Home</a></li>
  <li>Our Experts</li>
</ul>
</div>
</div>


<div class="content-block">
<div class="section-area section-sp1">


   <!-- Left part start -->
   <div class="section-area content-inner service-info-bx">
             <div class="container">
       <div class="row">
         @foreach($experts as $row)
         <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
           <div class="service-bx"  style=" background-color:#F5F5F5;">
             <div class="action-box rounded-circle">
               <img src="{{asset("storage/experts/$row->expert_image")}}" alt="image" height="50" width="50">
             </div>
             <div class="info-bx text-center">

               <h6><a href="#">{{Str::limit($row->expert_name,50)}}</a></h6>
               <hr>

                <h6><a href="#">{{Str::limit($row->designation,25)}}</a></h6>

               <!-- <a href="#" class="btn radius-xl"><i class="fa fa-eye"></i></a> -->
             </div>
             <hr>
           </div>
         </div>
         @endforeach

       </div>
     </div>
         </div>
         <!-- Our Services END -->






   <!-- Side bar END -->

</div>
</div>
</div>








</div>







@endsection
