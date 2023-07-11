@extends('backend.admin.master')

@section('content')

<h1 class="mt-4">Categories</h1>
<a class="btn btn-primary" href="{{route('vehicle.create')}}">Create</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Status</th>
      <th scope="col">Category Image</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->category_name}}</td>
      <td>{{$value->category_status}}</td>
      <td>
        <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/categories/'.$value->category_image)}}" alt="image">
      </td>
      <td>
        <a class="btn btn-info" href="">edit</a>
        <a class="btn btn-danger" href="">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
   

@endsection