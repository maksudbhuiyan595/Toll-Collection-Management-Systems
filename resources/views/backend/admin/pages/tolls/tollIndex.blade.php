@extends('backend.admin.master')

@section('content')

<h1 class="mt-4">Tolls</h1>
<a class="btn btn-primary" href="{{route('toll.create')}}">Create</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Vechile Name</th>
      <th scope="col">Plade Name</th>
      <th scope="col">Plade Number</th>
      <th scope="col">Diving Licence</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Toll</th>
      <th scope="col">Image</th>

      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($toll as $value)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$value->customer_name}}</td>
      <td>{{$value->vehicle_name}}</td>
      <td>{{$value->vehicle_plade_name}}</td>
      <td>{{$value->vehicle_plade_number}}</td>
      <td>{{$value->driving_licence}}</td>
      <td>{{$value->customer_phone}}</td>
      <td>{{$value->customer_address}}</td>
      <td>{{$value->toll}}</td>
      <td>
      <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/tolls/'.$value->vehicle_image)}}" alt="image">
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