@extends('backend.admin.master')



@section('content')

<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card m-3 p-3">
      <div class="card-body">
        <h2 class="text-center"><strong>Create vehicles report</strong></h2>
        <hr class="mb-3">

          <form action="{{route('vehicle.report.search')}}" method="get">

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
  <div id="vehicleReport">
    <h2 class="mt-4"><strong>Report of - {{request()->form_date}} to {{request()->to_date}}</strong></h2>
    <hr>
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Vehicle Category</th>
      <th scope="col">Plade Name</th>
      <th scope="col">Plade Number</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>

    @if(isset($vehicleReports))

    @foreach ($vehicleReports as $value)
    
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->vehicle_name}}</td>
      <td>{{$value->vehicleData->category_name}}</td>
      <td>{{$value->plade_name}}</td>
      <td>{{$value->plade_number}}</td>
      <td>
      <img style="width:60px;
                    height:60px;"
         src="{{url('/uploads/categories/'.$value->vehicleData->category_image)}}" alt="image">
      
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
</div>
<div class="d-grid gap-2">
    <button onclick="printDiv('vehicleReport')" class="btn btn-outline-info">Print</button>

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


