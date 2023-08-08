@extends('backend.admin.master')

@section('content')
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <div class="card-body">
          <form action="{{route('customer.update',$customers->id)}}" method="post">
            @csrf

                  <h1 class="mt-3">Customer edit form</h1>
                    <div class="mb-3">
                      <label class="form-label">Customer Name</label>
                      <input type="text" class="form-control" name="customer_name" placeholder="Customer name" value="{{$customers->customer_name}}">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Vehicle Name</label>
                      <select class="form-control" name="vehicle_id" >
                        @foreach ($names as $value )
                        <option @if($customers->vehicle_id == $value->id) selected @endif value="{{$value->id}}">{{$value->vehicle_name}}</option>
                        @endforeach
                        
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Driving Licence</label>
                      <input type="text" class="form-control"name="driving_licence" placeholder="Driving licence" 
                      value="{{$customers->driving_licence}}">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Customer Phone Number</label>
                      <input type="number" class="form-control"name="customer_phone" placeholder="customer phone number" value="{{$customers->customer_phone}}">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Customer Address</label>
                      <input type="text" class="form-control"name="customer_address" placeholder="customer address" value="{{$customers->customer_address}}">
                    </div>

                    <button type="submit" class="btn  btn-outline-success">Update</button>
              </form>
      </div>
    </div>
  </div>
</div>

@endsection