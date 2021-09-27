<div class="section-area section-sp2 popular-courses-bx">
          <div class="container">
    <div class="row">
      <div class="col-md-12 heading-bx left">



        <h2 class="title-head">E-learning <span>Courses</span></h2>


      </div>
    </div>
    <div class="row">

    <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">

      <?php
      $courses = App\Models\Course::all();

       ?>
      @foreach ($courses as $row)
      @if($row->status==1)
      <div class="item">
        <div class="cours-bx">
          <div class="action-box">
          <a href="home/course_details/{{$row->id}}"><img src="{{asset("storage/courses/$row->course_image")}}" alt="" height="420"
            width="700"></a>

            <form class="hidden" action="{{route('add-carts')}}" method="post">
              @csrf
              <input type="hidden" name="course_id" value="{{$row->id}}">

              <button  class="btn"><i class="fa fa-shopping-cart"></i></button>
            </form>
          </div>
          <div class="info-bx text-center">
            <h5><a href="home/course_details/{{$row->id}}">{{Str::limit($row->course_title,18)}}</a></h5>

            <span>{{$row->course_category->mcategory_title}}</span>
          </div>
          <div class="cours-more-info">
            <div class="review">
              <span>Review</span>
              <ul class="cours-star">
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>
                <li class="active"><i class="fa fa-star"></i></li>

              </ul>
            </div>
            <div class="price">
              <del>{{$row->regular_price}}৳</del>
              <h5 style="color:#ca2128;">{{$row->sale_price}}৳</h5>
            </div>
          </div>
        </div>
      </div>
      @endif


      @endforeach
    </div>

    </div>

  </div>
</div>

<div class="text-center">
  <a href="{{route('courses')}}" class="btn">View All</a>
</div>
