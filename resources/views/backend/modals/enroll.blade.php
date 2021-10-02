<div class="modal fade" id="EnrollCourseModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="EnrollCourseModal{{$row->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EnrollCourseModal{{$row->id}}">Enroll a Course to {{$row->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="custom select">Select Course</label>
            <select class="form-control" name="course_id">
              <option label="Choose category"></option>
              <?php foreach ($courses as $course): ?>
                <option value="{{$course->id}}">{{$course->course_title}}</option>

              <?php endforeach; ?>





            </select>
          </div>
          <div class="form-group">
            <label for="regualr_price">Price</label>
            <input type="number" value="{{$course->regular_price}}" class="form-control" name="regular_price" aria-describedby="regular_price" placeholder="Enter Regular Price">

          </div>
          <div class="form-group">
            <label for="regualr_price">Access</label>
            <input type="number" class="form-control" name="regular_price" aria-describedby="regular_price" placeholder="Enter Regular Price">

          </div>



                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Enroll</button>
      </div>
        </form>
    </div>
  </div>
</div>
