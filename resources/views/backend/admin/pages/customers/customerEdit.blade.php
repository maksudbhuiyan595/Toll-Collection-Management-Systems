@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('customer.update,$data->id)}}" method="post">
 @csrf
  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

   
    <h1 class="mt-3">Customer edit form</h1>
  <div class="mb-3">
    <label class="form-label">Customer Name</label>
    <input type="text" class="form-control" name="customer_name" placeholder="Customer name" value="{{$customer->customer_name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Name</label>
    <select class="form-control" name="vehicle_id" >
      @foreach ($names as $value )
      <option @if($customer->vehicle_id == $value->id) selected @endif value="{{$value->id}}">{{$value->vehicle_name}}</option>
      @endforeach
      
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Driving Licence</label>
    <input type="text" class="form-control"name="driving_licence" placeholder="Driving licence" 
    value="{{$customer->driving_licence}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Phone Number</label>
    <input type="number" class="form-control"name="customer_phone" placeholder="customer phone number" value="{{$customer->customer_phone}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Customer Address</label>
    <input type="text" class="form-control"name="customer_address" placeholder="customer address" value="{{$customer->customer_address}}">
  </div>
  <button type="submit" class="btn btn-lg btn-outline-success">Update</button>
</form>

@endsection