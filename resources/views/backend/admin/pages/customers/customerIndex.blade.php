@extends('backend.admin.master')

@section('content')

<h1 class="mt-4 text-center"><strong>Toll Colllection of Customer  Lists</strong></h1>
<hr>
<a class="btn btn-outline-primary" href="{{route('customer.create')}}">+Add New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Vechile Name</th>
      <th scope="col">Diving Licence</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $key=>$value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->customer_name}}</td>
      <td>{{$value->customerData->vehicle_name}}</td>
      <td>{{$value->driving_licence}}</td>
      <td>{{$value->customer_phone}}</td>
      <td>{{$value->customer_address}}</td>
      <td>
        <a class="btn btn-info text-white" href="{{route('customer.show',$value->id)}}">Show</a>
        <a class="btn btn-warning text-white" href="{{route('customer.edit',$value->id)}}">Edit</a>
        <a class="btn btn-danger text-white" href="{{route('customer.destroy',$value->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$customers->links()}}
@endsection