<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.partials.styles')
    <title>Document</title>
</head>
<body>

    <div class="d-flex" id="wrapper">
        <div class="container">
            <div>
                <h3 class="text-center mt-2" style="color: #CD3239">Your Result</h3>
            </div>
            @if ($result)
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>User</th>
                                <td>{{ $result->user->name }} ({{ $result->user->email }})</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ $result->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Score</th>
                                <td>{{ $result->correct_answers }}/{{ $result->questions_count }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-striped">
                            <?php $n = 0; ?>
                            @foreach ($result->topic->questions as $question)
                                <?php $n++; ?>
                                <tr class="test-option-false">
                                    <th style="width: 10%">Question #{{ $n }}</th>
                                    <th>{{ $question->question_text }}</th>
                                </tr>
                                <tr>
                                    <td>Options</td>
                                    <td>
                                        <ul>
                                            @foreach ($question->options as $option)
                                                @if ($option->correct == 1)
                                                    <li style="font-weight: bold;">{{ $option->option }}
                                                        <em>(correct answer)</em>
                                                        @foreach ($result->options as $user_option)
                                                            @if ($user_option->option_id == $option->id)
                                                                <em>(your answer)</em>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                @else
                                                    <li>
                                                        {{ $option->option }}
                                                        @foreach ($result->options as $user_option)
                                                            @if ($user_option->option_id == $option->id)
                                                                <em style="font-weight: bold;">(your answer)</em>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <h1>No Result</h1>
            @endif
        </div>
    </div>
@include('frontend.partials.scripts')
</body>
</html>
