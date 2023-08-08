@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card m-3 p-5">

          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif

<form action="{{route('customer.store')}}" method="post">

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

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
  <button type="submit" class="btn btn-lg btn-outline-success">Submit</button>
</form>

    </div>
  </div>
</div>
@endsection