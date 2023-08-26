@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card  m-3 p-5">

         

<form action="{{route('customer.store')}}" method="post">
    @csrf
    <h1 class="mt-3">Create New Customer</h1>
  <div class="mb-3">
    <label class="form-label">Customer Name</label>
    <input type="text" class="form-control" name="customer_name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Name</label>
    <select class="form-control" name="vehicle_id">
      @foreach ($names as $value )
      <option value="{{$value->id}}">{{$value->vehicle_name}}</option>
      @endforeach
      
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Driving Licence</label>
    <input type="text" class="form-control"name="driving_licence">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Phone Number</label>
    <input type="text" class="form-control"name="customer_phone">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Address</label>
    <input type="text" class="form-control"name="customer_address">
  </div>
      <div class="d-grid gap-2">
            <button class="btn btn-outline-success" type="submit">Submit</button>
          </div>

    </div>
  </div>
</div>
@endsection