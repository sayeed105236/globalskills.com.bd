@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="d-flex" id="wrapper">
    <div class="container">
        @if($question)
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Questions</h3>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Question text</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$question->topic->title}}</td>
                            <td>{{$question->question_text}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <h1>No Question</h1>
        @endif
    </div>
</div>
</div>

@endsection

@extends('admin.admin_master')
@section('admin_dashboard_content')

    <div class="d-flex" id="wrapper">
        <div class="container">
            @if ($option)
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 align="center">Edit Option</h2>
                <div class="form-group">
                    <hr>
                    <form action="{{route('questionsOptions-update', $option->id)}}" method="post">
                        @csrf
                        <div class="table-responsive">
                            <input type="hidden" name="id" value="{{ $option->id }}">
                            <div class="form-group">
                                <select name="question_id" class="form-control">
                                    @foreach ($questions as $question)
                                        <option {{ $option->question_id == $question->id ? 'selected' : '' }}
                                            value="{{ $question->id }}">{{ $question->question_text }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea required class="form-control options_list" name="option" id="" cols="30"
                                    rows="10">{{ $option->option }}</textarea>
                            </div>

                            <div>
                                Correct
                                <input type="checkbox" name="correct" value="1"
                                    {{ $option->correct == 1 ? 'checked' : '' }} />
                            </div>
                            <div class="mt-3">
                                <input class="btn btn-primary" type="submit" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <h1>No Question Option</h1>
            @endif
        </div>
    </div>
    </div>

@endsection
