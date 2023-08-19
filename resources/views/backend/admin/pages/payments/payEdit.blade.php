@extends('backend.admin.master')

@section('content')

      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif

<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <div class="card-body">
      <form action="{{route('payment.update',$payment->id)}}" method="post">
    @csrf

      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
      @endif

  
    <h1 class="mt-3">Create Edit Form</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
              <label class="form-label">Payment Date</label>
                <input type="date" class="form-control" name="date" placeholder="date" value="{{$payment->date}}" required>
            </div>
        <div class="mb-3">
            <label class="form-label">Toll Plaza Name </label>
              <select class="form-control" name="pay_toll_id" required>
                @foreach ($payTolls as $value )
                <option @if($payment->pay_toll_id==$value->id) selected @endif value="{{$value->id}}">{{$value->toll_name}}</option>
                @endforeach
                
              </select>
          </div>
        
          <div class="mb-3">
            <label class="form-label">Category Name</label>
              <select class="form-control" name="pay_category_id" required>
                @foreach ($payCategories as $value )
                <option @if($payment->pay_category_id==$value->id) selected @endif value="{{$value->id}}">{{$value->category_name}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Vehicle Name</label>
              <select class="form-control" name="pay_vehicle_id" required>
                @foreach ($payVehicles as $value )
                <option @if($payment->pay_vehicle_id==$value->id) selected @endif value="{{$value->id}}">{{$value->vehicle_name}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Plade Number</label>
              <select class="form-control" name="pay_vehicle_id" required>
                @foreach ($payVehicles as $value )
                <option @if($payment->pay_vehicle_id==$value->id) selected @endif value="{{$value->id}}">{{$value->plade_number}}</option>
                @endforeach
                
              </select>
          </div>
          
        </div><!-- col-md-6 end -->

      <div class="col-md-6">
          
          <div class="mb-3">
            <label class="form-label">Customer Name</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option @if($payment->pay_customer_id==$value->id) selected @endif value="{{$value->id}}">{{$value->customer_name}}</option>
                @endforeach
                
              </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Driving Licence</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option  @if($payment->pay_customer_id==$value->id) selected @endif value="{{$value->id}}">{{$value->driving_licence}}</option>
                @endforeach
                
              </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option  @if($payment->pay_customer_id==$value->id) selected @endif value="{{$value->id}}">{{$value->customer_phone}}</option>
                @endforeach
                
              </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
              <select class="form-control" name="pay_customer_id" required>
                @foreach ($payCustomers as $value )
                <option  @if($payment->pay_customer_id==$value->id) selected @endif value="{{$value->id}}">{{$value->customer_phone}}</option>
                @endforeach
                
              </select>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Amounts</label>
              <select class="form-control" name="pay_chart_id" required>
                @foreach ($payTollCharts as $value )
                <option @if($payment->pay_chart_id==$value->id) selected @endif value="{{$value->id}}">{{$value->toll_price}}</option>
                @endforeach
                
              </select>
          </div>

        </div>
          <!-- col- md- 6 end -->
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      
    </form>
      </div>
    </div>
  </div>
</div>
   

@endsection