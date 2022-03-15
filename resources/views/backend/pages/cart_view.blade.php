@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Cart List</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Cart Users</li>
    </ul>
  </div>

  <!-- Card -->

  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Cart List</h4>

        </div>


        <!-- Modal -->

        <div class="table table-responsive">
          <table id="cart_list" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>User Name</th>

                <th>Email</th>
                <th>Phone Number</th>
                <th>Course Name</th>

                <th>Created At</th>
                <th>IP</th>

              </tr>
            </thead>
            <tbody>

              @foreach ($carts as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$row->user->name}}

                </td>

                <td>
                    {{$row->user->email}}
                </td>
                <td>
                    {{$row->user->phone}}
                </td>
                <td>
                {{$row->course->course_title}}


                </td>


                <td>
                  {{$row->created_at}}
                </td>
                <td>{{$row->ip_address}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
  $(function(){
    'use strict';

    $('#cart_list').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ ',
      }
    });


  });
</script>




@endsection
