@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Certificate Request</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>User</li>
    </ul>
  </div>

  <!-- Card -->

  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Certificate request Lists</h4>

        </div>


        <!-- Modal -->

        <div class="table table-responsive">
          <table id="certificate" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>

                <th>Email</th>

                <th>Phone Number</th>
                <th>Course Name</th>
                <th>Course Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>

              @foreach ($certificate_requests as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$row->name}}

                </td>
                <td>{{$row->email}}</td>

                <td>{{$row->phone}}</td>

                <td>
                    {{$row->classroom_course->classroom_course_title}}
                </td>
                <td>
                    {{$row->classroom_course->main_category->mcategory_title}}
                </td>
                <td>
                {{$row->start_date}}


                </td>

                <td>{{$row->end_date}}</td>
                <td>

                <span class="badge badge-pill badge-success">{{ $row->status }}</span>
                @if($row->status=='pending')
                <a href="{{ url('/admin/certificate-request-approve/'.$row->id) }}" class="btn btn-sm btn-primary">Approve Now</a>
                @endif
                </td>
                <td>
                  <a  href="#"><i class="fas fa-envelope-open-text"></i></a>
                    <a  href="#"><i class="fas fa-file-pdf"></i></a>
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

<script>
  $(function(){
    'use strict';

    $('#certificate').DataTable({
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
