@extends('admin.admin_master')
@section('admin_dashboard_content')
<link href="{{asset('datatables/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Users</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>User</li>
    </ul>
  </div>
  @if(Session::has('user_deleted'))
  <div class="alert alert-danger" role="alert">

    <div class="alert-body">
      {{Session::get('user_deleted')}}
    </div>
  </div>
  @endif
  <!-- Card -->
  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Users</h4>
       <a href="#" class="btn btn-success" data-toggle="modal" data-target="#"><i class="fas fa-plus"></i></a>
        </div>

        <div class="table table-responsive">
          <table id="user_enrollements" id="example2" class="table table-bordered">
            <thead>
              <tr>
                <th class="wd-10p">Id</th>
                <th class="wd-10p">User Name</th>

                <th class="wd-10p">Email</th>
                <th class="wd-10p">Phone Number</th>

                <th class="wd-5p">Course Name</th>
                <th>Mocktest Name</th>
                <th>Price</th>
                <th class="wd-5p">Created At</th>
                <th class="wd-10p">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($enrollments as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td >
                    {{$row->users->name}}

                </td>

                <td>
                    {{$row->users->email}}
                </td>
                <td>
                    {{$row->users->phone}}
                </td>
                <td>
                  @if($row->course_id > 0)

                <span class="badge bg-success text-dark">{{$row->course->course_title}}</span>
                @else
                No data
                @endif

                </td>
                <td>
                    @if($row->mocktest_id > 0)

                    <span class="badge bg-success text-dark">{{$row->mocktest->mock_category}}</span>
                    @else
                    No data
                    @endif

                </td>

                <td>
                  {{$row->regular_price}}
                </td>
                <td>{{$row->created_at}}</td>

                <td>
                  <a href="#"><i class="fas fa-edit"></i></a>
                  <a id="delete" href="#"><i class="fas fa-trash"></i></a>


                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->

</div>

<style>
    .btn:active, .btn:hover, .btn:focus, .active > .btn {
        background-color: #d8a409;
         color: #000000;
    }
</style>
<script>
  $(function(){
    'use strict';

    $('#user_enrollements').DataTable({
      responsive: false,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ ',
      }
    });


  });
</script>


@endsection
