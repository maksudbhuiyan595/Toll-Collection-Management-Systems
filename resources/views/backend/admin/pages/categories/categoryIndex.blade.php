@extends('backend.admin.master')

@section('content')

  <h1 class="mt-4 text-center"><strong>Toll Collection of Category Lists</strong></h1>
<a class="btn btn-outline-primary " href="{{route('category.create')}}">+Add New</a>

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
    
    @foreach($categories as $key=>$value)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->category_name}}</td>
      <td>{{$value->category_status}}</td>
      <td>
        <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/categories/'.$value->category_image)}}" alt="image">
      </td>
      <td>

        <a class="btn btn-info text-white" href="{{route('category.show',$value->id)}}">Show</a>
        <a class="btn btn-warning text-white" href="{{route('category.edit',$value->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('category.destroy',$value->id)}}">Delete</a>



      </td>
    </tr>
    @endforeach
  </tbody>
</table>
   
{{$categories->links()}}
@endsection