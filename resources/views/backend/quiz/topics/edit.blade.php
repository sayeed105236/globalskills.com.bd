@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="container">
    @if($topic)
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h1>{{$topic->title}}</h1>
            <div class="form-group">
                <form action="{{route('topics-update')}}" method="post">
                    @csrf
                    <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                    <div class="form-group">
                        <input required type="text" name="title" class="form-control" value="{{$topic->title}}">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="timer" class="form-control" value="{{$topic->time}}">
                    </div>
                    <button class="btn btn-primary" type="submit">update</button>
                </form>
            </div>
        </div>
        @else
            <h1>No Topic</h1>
        @endif
    </div>
    </div>
</div>

@endsection
