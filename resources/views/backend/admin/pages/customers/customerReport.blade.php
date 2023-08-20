
@extends('backend.admin.master')

@section('content')

<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card m-3 p-3">
      <div class="card-body">
        <h2 class="text-center"><strong>Create customer report</strong></h2>
        <hr class="mb-3">
          <form action="{{route('customer.report.search')}}" method="get">
              @csrf

            <div class="row">
                <div class="col-md-4">
                  <label><strong>From Date</strong></label>
                    <input type="date" name="form_date" class="form-control" value="{{request()->form_date}}">
                </div>
                <div class="col-md-4">
                    <label><strong>To Date</strong></label>
                    <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
                </div>
            
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success mt-4">Search</button>
                </div>
              </div>
          </form>
  <div id="customerReport">
    <h2 class="mt-4"><strong>Report of - {{request()->form_date}} to {{request()->to_date}}</strong></h2>
    <hr>
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Vechile Name</th>
      <th scope="col">Diving Licence</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

    @if(isset($customerReports))
    @foreach($customerReports as $value)

    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->customer_name}}</td>
      <td>{{$value->customerData->vehicle_name}}</td>
      <td>{{$value->diving_licence}}</td>
      <td>{{$value->customer_phone}}</td>
      <td>{{$value->customer_address}}</td>
    </tr>

    @endforeach
    @endif

  </tbody>
</table>
</div>
<div class="d-grid gap-2">
    <button onclick="printDiv('customerReport')" class="btn btn-outline-info">Print</button>

    <script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>
</div>
</div>
 </div>
 </div>
@endsection
