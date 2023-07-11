@extends('backend.admin.master')

@section('content')

<h1 class="mt-4">Vehicles</h1>
<a class="btn btn-primary" href="{{route('vehicle.create')}}">Create</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Category</th>
      <th scope="col">Plade Name</th>
      <th scope="col">Plade Number</th>
      <th scope="col">Image</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($vehicle as $value)
    
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->vehicle_name}}</td>
      <td>{{$value->vehicleData->category_name}}</td>
      <td>{{$value->plade_name}}</td>
      <td>{{$value->plade_number}}</td>
      <td>
      <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/categories/'.$value->vehicleData->category_image)}}" alt="image">
      <td>
        <a class="btn btn-info" href="">edit</a>
        <a class="btn btn-danger" href="">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
   
{{ $vehicle->links()}}
@endsection