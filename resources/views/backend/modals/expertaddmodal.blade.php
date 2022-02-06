<div class="modal fade" id="ExpertAddModal" tabindex="-1" role="dialog" aria-labelledby="ExpertAddModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ClassroomCourseAddModal">Add Expert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('store-expert')}}" method="POST" enctype="multipart/form-data">
          @csrf

            <div class="form-group">
              <label for="classroom_course_title">Expert Name</label>
              <input type="text" class="form-control" name="expert_name" aria-describedby="expert_name" placeholder="Enter Name" required>

            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Photo (3016*3489)</label>
                  <input type="file" name="file" class="form-control-file" id="expert_image" onchange="previewImage(this)" required>
            </div>


            <div class="form-group">
              <label for="training_fee">Designation</label>
              <input type="text" class="form-control" name="designation" aria-describedby="designation" placeholder="Enter Designation" required>

            </div>
            <div class="form-group">
              <label class="col-form-label">Quotes</label>
              <div>
                <textarea id="Quotes" class="form-control" name="Quotes"> </textarea>
              </div>

            </div>
            <div class="form-group">
              <label for="sale_price">Intro Link</label>
              <input type="text" class="form-control" name="intro_link" aria-describedby="intro_link" placeholder="Enter Intro Link">

            </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  $('#Quotes').summernote();
});
</script>
