@extends('frontend.layouts.master')


@section('content')

<div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}});">
    <div class="container">
        <div class="page-banner-entry">
          <br/>
          <br/>




            <h1 class="text-white">Cart</h1>

 </div>
    </div>
</div>

<!-- Breadcrumb row -->
<div class="breadcrumb-row">
<div class="container">
<ul class="list-inline">
  <li><a href="{{route('course_details')}}">Home</a></li>
  <li><a href="#">Cart</a></li>

</ul>
</div>
</div>
<br>
<br>
<div class="container">



<div class="row" id="table-hover-animation">



  <div class="col-6">

    <div class="card">
      <div class="card-header">
        <div class="row">

        <div class="col">


        <h4 class="card-title" style="color:#ca2128; text-transform:uppercase;">Cart <i class="fa fa-cart-arrow-down fa-2x"></i></h4>
          </div>
        <div class="color">



          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-hover-animation">
          <thead>
            <tr>
              <th>Course Name</th>
              <th>Image</th>
              <th>Category</th>
              <th>Regular Price</th>
              <th>Sale Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>

                <span class="font-weight-bold">Angular Project</span>
              </td>
              <td><img src="{{ asset('images/profile/pic1.jpg')}}" alt="image"
              height="50"
              width="50"/></td>
              <td>ITIL 4</td>
              <td>
                <del>  20000 Tk</del>

              </td>
              <td>10,000Tk</td>

              <td>
              <a href="#"><i class="fa fa-trash"></i></a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
    </div>

      <div class="col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" style="color:#ca2128; text-transform:uppercase;">Total</h4>
        </div>

        <div class="table-responsive">
          <table class="table table-hover-animation">
            <thead>
              <tr>
                <th>Course Name</th>
                <th></th>

                <th>Price</th>

              </tr>

            </thead>
            <tbody>
              <tr>
                <td>

                  <span class="font-weight-bold">Angular Project</span>
                </td>
                <td></td>


                <td>10,000Tk</td>


              </tr>
              <tr>
                <td>

                  <span class="font-weight-bold">Vat(15%)</span>
                </td>
                <td></td>

                <td>100Tk</td>


              </tr>
              <tr>
                <td>

                  <span class="font-weight-bold">Tax(10%)</span>
                </td>
                <td></td>


                <td>50Tk</td>


              </tr>
              <tr>
                <td>

                  <span class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">Total</span>
                </td>
                <td>=</td>


                <td class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">10,150Tk</td>


              </tr>

            </tbody>
          </table>
        </div>

      </div>
      <br>
      <a class="text-center btn btn-primary" href="#">Procceed To Payment</a>
    </div>


  </div>
</div>

<br>
<br>








@endsection
