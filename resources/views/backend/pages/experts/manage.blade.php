@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Experts</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Manage Expert Lists</li>
    </ul>
  </div>
  <!-- Card -->

  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Manage Expert Lists</h4>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ExpertAddModal"><i class="fas fa-plus-circle"></i></a>
          @include('backend.modals.expertaddmodal')
        </div>
        @if(Session::has('exper_added'))
        <div class="alert alert-success" role="alert">

          <div class="alert-body">
            {{Session::get('exper_added')}}
          </div>
        </div>

        @elseif(Session::has('exper_deleted'))
        <div class="alert alert-danger" role="alert">

          <div class="alert-body">
            {{Session::get('exper_deleted')}}
          </div>
        </div>


        @elseif(Session::has('exper_updated'))
        <div class="alert alert-success" role="alert">

          <div class="alert-body">
            {{Session::get('exper_updated')}}
          </div>
        </div>

        @endif





        <!-- Modal -->

        <div class="table table-responsive">
          <table class="table table-bordered" id="expert_list">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>Expert Name</th>

                <th>Image</th>
                <th>Designation</th>
                <th>Quotes</th>
                <th>Intro Link</th>

                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach($experts as $row)
              <tr>

                <td>{{$loop->index+1}}</td>
                <td>

                  <span class="font-weight-bold">{{$row->expert_name}}</span>
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
                        src="{{asset("storage/experts/$row->expert_image")}}"
                        alt="image"
                        height="50"
                        width="50"

                      />
                    </div>


                  </div>
                </td>
                <td>

                  <span class="font-weight-bold">{{$row->designation}} </span>
                </td>

                <td>{!!$row->Quotes!!} </td>

                <td>
                {{$row->intro_link}}</td>




                <td>
                  <a href="#"><i class="fas fa-file-upload"></i></a>
                  <a href="#" data-toggle="modal" data-target="#ExperteditModal{{$row->id}}" ><i class="fas fa-edit"></i></a>

                  <a id="delete" href="/admin/experts/delete/{{$row->id}}"><i class="fas fa-trash"></i></a>
                  @include('backend.modals.experteditmodal')


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

    $('#expert_list').DataTable({
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
