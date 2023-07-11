@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('toll.store')}}" method="post" enctype="multipart/form-data">

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Toll</h1>
  <div class="mb-3">
    <label class="form-label">Customer Name</label>
    <input type="text" class="form-control" name="customer_name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Name</label>
    <input type="text" class="form-control"name="vehicle_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Plade Name</label>
    <input type="text" class="form-control"name="vehicle_plade_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Plade Number</label>
    <input type="text" class="form-control"name="vehicle_plade_number">
  </div>
  <div class="mb-3">
    <label class="form-label">Driving Licence</label>
    <input type="text" class="form-control"name="driving_licence">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Phone Number</label>
    <input type="number" class="form-control"name="customer_phone">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Address</label>
    <input type="text" class="form-control"name="customer_address">
  </div>
  <div class="mb-3">
    <label class="form-label">Toll</label>
    <input type="number" class="form-control"name="toll">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control"name="vehicle_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

@endsection