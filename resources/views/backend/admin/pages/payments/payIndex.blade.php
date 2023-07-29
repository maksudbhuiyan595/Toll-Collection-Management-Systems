@extends('backend.admin.master')

@section('content')

<h1 class="mt-4"> Payments</h1>
<a class="btn btn-outline-primary" href="{{route('payment.create')}}">Create New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Toll Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Category</th>
      <th scope="col">Vehicle</th>
      <th scope="col">Amounts</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($paymentData as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->payToll->toll_name}}</td>
      <td>{{$value->date}}</td>
      <td>{{$value->time}}</td>
      <td>{{$value->payCustomer->customer_name}}</td>
      <td>{{$value->payCategory->category_name}}</td>
      <td>{{$value->payVehicle->vehicle_name}}</td>
      <td>{{$value->payChart->toll_price}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('payment.edit',$value->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('payment.destroy',$value->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$paymentData->links()}} 

@endsection