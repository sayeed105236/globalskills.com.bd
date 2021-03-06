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
            <div class="page-container">
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <h3 class="page-title">All Results</h3>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-bordered table-striped datatable">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Date</th>
                                                        <th>Result</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($allResults as $result)
                                                        <tr>
                                                            <td>{{ $result->user->name }} ({{ $result->user->email }})</td>
                                                            <td>{{ $result->created_at }}</td>
                                                            <td>{{ $result->correct_answers }}/{{ $result->questions_count }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('results.show', $result->id) }}"
                                                                    class="btn btn-xs btn-primary">View</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->



    </div>
    </div>
    </div>

@include('frontend.partials.scripts')

</body>
</html>
