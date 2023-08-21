@extends('backend.admin.master')

@section('content')


<h1 class="mt-4 text-center"><strong>Toll Collection of Vehicle Lists</strong></h1>
<a class="btn btn-outline-primary" href="{{route('vehicle.create')}}">+Add New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Category</th>
      <th scope="col">Plade Number</th>
      <th scope="col">Image</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($vehicles as $key=>$value)
    
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->vehicle_name}}</td>
      <td>{{$value->vehicleData->category_name}}</td>
      <td>{{$value->plade_number}}</td>
      <td>
      <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/categories/'.$value->vehicleData->category_image)}}" alt="image">
      <td>

        <a class="btn btn-info text-white" href="{{Route('vehicle.show',$value->id)}}">Show</a>
        <a class="btn btn-warning text-white" href="{{Route('vehicle.edit',$value->id)}}">Edit</a>
        <a class="btn btn-danger text-white" href="{{Route('vehicle.destroy',$value->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
   
{{ $vehicles->links()}}
@endsection