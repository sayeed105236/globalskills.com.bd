<div class="modal fade" id="CourseDetailsUpdateModal" tabindex="-1" role="dialog" aria-labelledby="CourseDetailsUpdateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CourseDetailsUpdateModal">View Course Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>
                  Course Id
                </th>
                <th>Course Title</th>

                <th>Banner Images</th>
                <th>Short Description</th>
                <th>Course Description</th>
                <th>Learning Outcomes</th>
                <th>Certification</th>
                <th>Instructor ID</th>
                <th>Skill</th>
                <th>Language</th>
                <th>Quiz</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>


              <tr>
                <td>
                    {{$course->id}}
                </td>
                <td>
                    {{$course->course_title}}

                </td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="top"
                      title=""
                      class="avatar pull-up my-0"
                      data-original-title=""
                    >
                      <img
                        src="{{asset("storage/courses/banners/$course->course_details->banner_image")}}"
                        alt="image"
                        height="50"
                        width="50"

                      />
                    </div>


                  </div>

                </td>

                <td>
                  {{$course->course_details->short_description}}


                </td>
                <td>
                    {{$course->course_details->course_description}}

                </td>
                <td>

                      {{$course->course_details->learning_outcomes}}

                </td>
                <td>

                      {{$course->course_details->certification}}
                </td>

                <td>
                    {{$course->course_details->instructor_id}}
                </td>
                <td>
                    {{$course->course_details->skill}}
                  </td>
                <td>
                    {{$course->course_details->language}}

                </td>
                <td>

                    {{$course->course_details->quiz}}
                </td>
                <td>

                  <a href="#"><i class="fas fa-edit"></i></a>


                </td>
              </tr>




            </tbody>
          </table>
        </div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>
