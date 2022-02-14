<div class="modal fade" id="ClassroomCourseThumbnalisEditModal" tabindex="-1" role="dialog" aria-labelledby="ClassroomCourseThumbnalisEditModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ClassroomCourseThumbnalisEditModal">Edit Classroom Course Thumbnails</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('update-classroom-course-image')}}" method="POST" enctype="multipart/form-data">
          @csrf


          <input type="hidden" name="id" value="{{$classroom_course->id}}">


            <div class="form-group">
                <label for="exampleFormControlFile1">Classroom Course Thumbnails</label>
                  <input type="file" name="image" class="form-control-file" id="classroom_course_image" onchange="previewImage(this)" required>
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
