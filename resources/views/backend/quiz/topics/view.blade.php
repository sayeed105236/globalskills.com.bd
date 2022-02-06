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
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Mock Details</li>
                <li>Topics</li>
                <li>Questions</li>
            </ul>
        </div>
    </div>
    <style>
        .fixme {
            background: #3d0896;
            color: white;
            text-align: center;
            width: 100%;
            padding: 10px 0;
        }

    </style>
    <div class="container">
        @if ($topic)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row card">
                <div class="col-md-12">
                    <div class="content"></div>
                    <div class="time fixme" id="navbar" style="text-align: right; font-size:20px; font-weight:700; padding-right:10px;
                                                                 background-color:darkcyan;
                                                                ">Time Left :<span id="timer"></span></div>
                    <h1>{{ $topic->title }}</h1>
                    <form action="{{ route('results.store') }}" method="post" id="form">
                        @csrf
                        <div>
                            <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                            @foreach ($topic->questions as $question)
                                <div>
                                    <div style="font-size: 24px; font-weight:700; background-color:maroon;">
                                        <div style="margin-left: 20px; color:#fff;">
                                            {{ $question->question_text }}
                                        </div>
                                    </div>
                                    <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                                    @foreach ($question->options as $option)
                                        <div style="margin-left:40px; font-size:20px;">
                                            <input type="checkbox" name="option[{{ $question->id }}][{{ $option->id }}]"
                                                value="{{ $option->correct }}">
                                            {{ $option->option }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>
                        <a href="{{ route('results.show', $topic->id) }}"><input type="submit" value="Submit"
                                class="btn btn-success mt-3"></a>

                    </form>


                </div>

            </div>
        @else
            <h1>No Topic</h1>
        @endif


    </div>


    <?php
    $con = mysqli_connect('localhost', 'root', '', 'gsda');

    // Check connection
    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }
    $id = $topic->id;
    $fetchtime = "SELECT `timer` FROM `topics` WHERE id = '$id'";
    $fetched = mysqli_query($con, $fetchtime);
    $time = mysqli_fetch_array($fetched, MYSQLI_ASSOC);
    $settime = $time['timer'];
    ?>



    <script>
        window.onload = function() {
            document.getElementById('myDIV').style.display = 'none';
        };
    </script>

    <script type="text/javascript">
        startTimer();
        document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
        //03 + ":" + 00 ;

        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            if (m == 0 && s == 0) {
                document.getElementById("form").submit();
            }
            document.getElementById('timer').innerHTML =
                m + ":" + s;
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            };
            return sec;
            if (sec == 0 && m == 0) {
                alert('stop it')
            };
        }
    </script>



    <script>
        var fixmeTop = $('.fixme').offset().top;
        $(window).scroll(function() {
            var currentScroll = $(window).scrollTop();
            if (currentScroll >= fixmeTop) {
                $('.fixme').css({
                    position: 'fixed',
                    top: '0',
                    left: '0'
                });
            } else {
                $('.fixme').css({
                    position: 'static'
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @include('frontend.partials.scripts')
    <!-- contact area END -->

</div>


</body>
</html>
