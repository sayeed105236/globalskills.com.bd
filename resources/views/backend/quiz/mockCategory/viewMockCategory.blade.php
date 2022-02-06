@extends('admin.admin_master')
@section('admin_dashboard_content')
<h3 class="text-center">Mock Test Category</h3>
<div>
    <a href="#" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#mockTestAdd"> <i class="fa fa-plus"></i></a>
@include('backend.quiz.mockCategory.addMockCategory');
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Mocktest Name</th>
        <th scope="col">Regular Price</th>
        <th scope="col">Discount Price</th>
        <th scope="col">Short Description</th>
        <th scope="col">Exam Format</th>

      </tr>
    </thead>
    <tbody>

        @foreach ($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>
            <img src="{{ asset($category->image) }}" alt="" style="height: 30px; width: 50px;">
        </td>
        <td>{{ $category->mock_category }}</td>
       <td>{{ $category->regular_price }}</td>
       <td>{{ $category->discount_price }}</td>
       <td>{{ $category->description }}</td>
       <td>{{ $category->exam_format }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
