@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Classroom Courses</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Classroom Courses</li>
    </ul>
  </div>
  <!-- Card -->

  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Classroom Courses</h4>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#CourseAddModal">Add</a>
        </div>





        <!-- Modal -->

        <div class="table-responsive">
          <table class="table" id="course_table">
            <thead>
              <tr>
                <th>
                  Course Id
                </th>
                <th>Course Title</th>

                <th>Images</th>
                <th>Main Category</th>
                <th>Course Category</th>
                <th>Exam Fee</th>
                <th>Training Fee</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>


              <tr>
                <td></td>
                <td>

                  <span class="font-weight-bold"></span>
                </td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="top"
                      title=""
                      class="avatar pull-up my-0"
                      data-original-title=""
                    >
                      <img
                        src="#"
                        alt="image"
                        height="50"
                        width="50"

                      />
                    </div>


                  </div>
                <td>

                  <span class="font-weight-bold"> </span>
                </td>
                <td>

                  <span class="font-weight-bold"> </span>
                </td>
                <td> BDT</td>
                <td> BDT</td>


                </td>
                <td>

                  </td>
                <td>
                  <a href="#"><i class="fas fa-file-upload"></i></a>
                  <a href="#"><i class="fas fa-edit"></i></a>
                  <a href="#"><i class="fas fa-trash"></i></a>

                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
