@extends('admin.admin_master')
@section('admin_dashboard_content')
    <div class="d-flex" id="wrapper">
        <div class="container">
            <h2 align="center">Create new Quiz</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <form action="{{ route('topics-store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Select Course</label>
                        <select name="course_id" id="inputState" class="form-control select2-show-search">
                            @foreach ($courses as $course)
                                <option selected value="{{ $course->id }}">{{ $course->mock_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Topic</label>
                        <input type="text" name="title" class="form-control" placeholder="Topic">
                    </div>
                    <div class="form-group">
                        <label for="">Time</label>
                        <input type="text" name="timer" class="form-control" placeholder="0:00">
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Create Course Topic" />
                </form>
            </div>

            <div class="form-group">
                <hr>
                <form action="{{ route('questions-store') }}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <h2 class="mt-2" align="center">Add question to quiz</h2>
                        <table class="table table-bordered" id="dynamic_field">

                            <div class="form-group">
                                <label class="form-control-label">Select Course: </label>
                                <select class="form-control select2-show-search" data-placeholder="Select One" name="course_id">
                                  <option label="Choose one"></option>
                                  @foreach ($courses as $cat)
                                  <option value="{{ $cat->id }}">{{ ucwords($cat->mock_category) }}</option>
                                  @endforeach
                                </select>
                                @error('course_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>

                              <div class="form-group">
                                  <label class="form-control-label">Select Topic: </label>
                                  <select class="form-control select2-show-search" data-placeholder="Select One" name="topic_id">
                                    <option label="Choose one"></option>

                                  </select>
                                  @error('topic_id')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>




                            <tr>
                                <td>
                                    <input type="text" name="question" placeholder="Question"
                                        class="form-control question_list" required />
                                <td>
                                    <input type="text" name="options[]" placeholder="option"
                                        class="form-control options_list" required />
                                </td>
                                <td>
                                    <input type="checkbox" name="correct[]" value="1" placeholder="option" />
                                </td>
                                </td>
                                <td>
                                    <button type="button" name="addAnswer" id="addAnswer" class="btn btn-success mb-2">
                                        Add Answer
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="addQuestion" id="addQuestion" class="btn btn-success mb-2 mr-2"
                            value="Add Question" />
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
          $('select[name="course_id"]').on('change', function(){
              var course_id = $(this).val();
              if(course_id) {
                  $.ajax({
                      url: "{{  url('/admin/subcategory/ajax') }}/"+course_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         var d =$('select[name="topic_id"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="topic_id"]').append('<option value="'+ value.id +'">' + value.title + '</option>');

                            });

                      },

                  });
              } else {
                  alert('danger');
              }

          });

      });

      </script>



    <script type="text/javascript">
        $(document).ready(function() {
            var n = 1;

            $('#addAnswer').click(function() {
                n++;
                $('#dynamic_field').append('' +
                    '<tr id="row' + n + '" class="dynamic-added">' +
                    '<td>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" name="options[]" required placeholder="option" class="form-control question_list" />' +
                    '</td>' +
                    '<td>' +
                    '<input type="checkbox" name="correct[]" value="' + n +
                    '" class="question_list" />' +
                    '</td>' +
                    '<td>' +
                    '<button type="button" name="remove" id="' + n +
                    '" class="btn btn-danger btn_remove">X</button>' +
                    '</td>' +
                    '</tr>');
            });


            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

        });
    </script>

@endsection
