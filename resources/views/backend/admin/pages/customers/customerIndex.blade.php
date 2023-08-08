@extends('backend.admin.master')

@section('content')

<h1 class="mt-4 text-center"><strong>Toll Colllection Customer  Lists</strong></h1>
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
    @foreach($customers as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->customer_name}}</td>
      <td>{{$value->customerData->vehicle_name}}</td>
      <td>{{$value->driving_licence}}</td>
      <td>{{$value->customer_phone}}</td>
      <td>{{$value->customer_address}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('customer.edit',$value->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('customer.destroy',$value->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$customers->links()}}
@endsection