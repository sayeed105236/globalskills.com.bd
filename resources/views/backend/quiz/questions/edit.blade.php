@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="d-flex" id="wrapper">
    <div class="container">
        @if($question)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('questions-update', $question->id)}}">
                @csrf

                <div class="panel panel-default">
                    <h2 align="center">Edit Question</h2>
                    <div class="panel-body">

                        <div class="row">
                            <input type="hidden" name="id" value="{{ $question->id }}">
                            <div class="form-group">
                                <label class="form-control-label">Select Course:</label>
                                <select class="form-control select2-show-search" data-placeholder="Select one"
                                name="course_id">
                                    <option label="Choose one"></option>
                                    @php
                                        $course= App\Models\Course::where('id',$question->course_id)->get();
                                    @endphp
                                    @foreach ($course as $cat)

                                    <option value="{{ $cat->id }}" {{ $cat->id == $question->course_id? 'selected':'' }}>{{ ucwords($cat->course_title) }}</option>
                                    @endforeach
                                  </select>
                                @error('course_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <select class="form-control" name="topic_id">
                                    @foreach($topics as $topic)
                                        <option value="{{$topic->id}}">{{$topic->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="question_text" class="control-label">Question text</label>
                                <textarea class="form-control" required placeholder="" name="question_text"
                                          cols="50"
                                          rows="10">{{$question->question_text}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Update">
            </form>
        @else
            <h1>No Question</h1>
        @endif
    </div>
</div>

@endsection
