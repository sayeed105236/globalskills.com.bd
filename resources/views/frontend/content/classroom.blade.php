<div class="section-area section-sp2 popular-courses-bx">
          <div class="container">
    <div class="row">
      <div class="col-md-12 heading-bx left">
        <?php
        $classroom_courses = App\Models\ClassroomCourse::all();

         ?>


        <h2 class="title-head">Classroom <span>Courses</span></h2>



      </div>
    </div>
    <div class="row">

    <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
      <?php
      $classroom_courses = App\Models\ClassroomCourse::all();

       ?>
      @foreach ($classroom_courses as $row)
      @if($row->status==1)
      <div class="item" >
        <div class="cours-bx">
          <div class="action-box">
            <img src="{{asset("storage/Classroom courses/$row->classroom_course_image")}}" alt="">
            <!--<form class="hidden" action="{{route('add-carts')}}" method="post">
              @csrf
              <input type="hidden" name="classroom_course_id" value="{{$row->id}}">

              <button  class="btn">Add to Cart</button>
            </form>-->
          </div>
          <div class="info-bx text-center">
            <h5><a href="/home/classroom/course_details/{{$row->id}}">{{$row->classroom_course_title}}</a></h5>
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
      @endforeach

    </div>

    </div>

  </div>
</div>
<div class="text-center">
  <a href="{{route('classroom-courses')}}" class="btn">View All</a>
</div>
