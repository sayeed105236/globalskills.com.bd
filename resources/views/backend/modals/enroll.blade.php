<div class="modal fade" id="EnrollCourseModal{{$row->id}}" tabindex="-1" role="dialog"
     aria-labelledby="EnrollCourseModal{{$row->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EnrollCourseModal{{$row->id}}">Enroll a Course to {{$row->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {{ Form::open(['id'=>'course_enroll', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
                    @csrf

                    <div class="form-group">
                        <label for="custom select">Select Course</label>
                        {{Form::hidden('user_id', $row->id)}}
                        {!! Form::select('course_id',$data['course'],null, ['class' =>
                        'form-field select2Me', 'id'=>'course_id','onchange'=>'coursePrice()']) !!}
                        {{--<select class="form-control" name="course_id">
                            <option label="Choose category"></option>
                            <?php foreach ($courses as $course): ?>
                            <option value="{{$course->id}}">{{$course->course_title}}</option>

                            <?php endforeach; ?>

                        </select>--}}
                    </div>
                    <div class="form-group">
                        <label for="regualr_price">Price</label>
                        {!! Form::text('regular_price',null, ['class' =>
                        'form-control', 'id'=>'regular_price']) !!}

                    </div>
                    <div class="form-group">
                        <label for="access">Access</label>
                        <input type="number" class="form-control" name="access" aria-describedby="access"
                               placeholder="Enter Access">

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        {{Form::submit('Enroll', ['class'=>'btn btn-success'])}}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
