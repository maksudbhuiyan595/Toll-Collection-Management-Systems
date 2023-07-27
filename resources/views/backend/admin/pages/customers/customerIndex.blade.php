@extends('backend.admin.master')

@section('content')

<h1 class="mt-4">Customers</h1>
<a class="btn btn-primary" href="{{route('customer.create')}}">Create</a>

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
    @foreach($customer as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->customer_name}}</td>
      <td>{{$value->customerData->vehicle_name}}</td>
      <td>{{$value->driving_licence}}</td>
      <td>{{$value->customer_phone}}</td>
      <td>{{$value->customer_address}}</td>
      <td>
        <a class="btn btn-info" href="">Show</a>
        <a class="btn btn-warning" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$customer->links()}}
@endsection