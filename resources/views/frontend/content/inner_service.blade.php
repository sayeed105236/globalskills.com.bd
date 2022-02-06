<div class="section-area content-inner service-info-bx">
          <div class="container">
    <div class="row">
      <?php
      $categories = App\Models\MainCategory::all();

       ?>



      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="service-bx">
          <div class="action-box">
            <img src="{{asset('/images/e-learning.jpg')}}" alt="">
          </div>
          <div class="info-bx text-center">
            <div class="feature-box-sm radius bg-white">
              <i class="fa fa-graduation-cap"></i>
            </div>
          <a href="{{route('courses')}}"> <h4 style="color:#ca2128; text-transform:uppercase;">E-LEARNING</h4></a>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="service-bx">
          <div class="action-box">
            <img src="{{asset('/images/classroom.jpg')}}" alt="">
          </div>
          <div class="info-bx text-center">
            <div class="feature-box-sm radius bg-white">
            <i class="fa fa-chalkboard-teacher"></i>
            </div>
            <a href="{{route('classroom-courses')}}"><h4 style="color:#ca2128; text-transform:uppercase;">CLASSROOM</h4></a>

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="service-bx">
          <div class="action-box">
            <img src="{{asset('/images/mocktest.jpg')}}" alt="">
          </div>
          <div class="info-bx text-center">
            <div class="feature-box-sm radius bg-white">
              <i class="fas fa-book-reader"></i>
            </div>
            <h4 style="color:#ca2128; text-transform:uppercase;">MOCKTEST</h4>

          </div>
        </div>
      </div>





    </div>
  </div>
      </div>
      <!-- Our Services END -->
