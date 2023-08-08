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

<form action="{{route('payment.store')}}" method="post">

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Pyament</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
              <label class="form-label">Payment Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>
        <div class="mb-3">
            <label class="form-label">Toll Plaza Name </label>
              <select class="form-control" name="pay_toll_id" required>
                @foreach ($payTolls as $value )
                <option value="{{$value->id}}">{{$value->toll_name}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Category Name</label>
              <select class="form-control" name="pay_category_id" required>
                @foreach ($payCategories as $value )
                <option value="{{$value->id}}">{{$value->category_name}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Vehicle Name</label>
              <select class="form-control" name="pay_vehicle_id" required>
                @foreach ($payVehicles as $value )
                <option value="{{$value->id}}">{{$value->vehicle_name}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
              <label class="form-label">Plade Number</label>
                <select class="form-control" name="pay_vehicle_id" required>
                  @foreach ($payVehicles as $value )
                  <option value="{{$value->id}}">{{$value->plade_number}}</option>
                  @endforeach
                  
                </select>
            </div>
          
        </div><!-- col-md-6 end -->

      <div class="col-md-6">
        
        <div class="mb-3">
              <label class="form-label">Customer Name</label>
                <select class="form-control" name="pay_customer_id" required>
                  @foreach ($payCustomers as $value )
                  <option value="{{$value->id}}">{{$value->customer_name}}</option>
                  @endforeach
                  
                </select>
            </div>
          
          <div class="mb-3">
            <label class="form-label">Driving Licence</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option value="{{$value->id}}">{{$value->driving_licence}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Mobile</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option value="{{$value->id}}">{{$value->customer_phone}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Address</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option value="{{$value->id}}">{{$value->customer_address}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Amounts</label>
              <select class="form-control" name="pay_chart_id" required>
                @foreach ($payTollCharts as $value )
                <option value="{{$value->id}}">{{$value->toll_price}}</option>
                @endforeach
                
              </select>
          </div>
      </div>
      <button type="submit" class="btn btn-outline-success">Payment</button>
  
    </form>
  </div>
  </div>
 </div> 

@endsection