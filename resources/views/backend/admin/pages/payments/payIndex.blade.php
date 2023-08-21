@extends('backend.admin.master')

@section('content')

<h1 class="mt-4 text-center"><strong>Toll Collection Payment Lists</strong></h1>
<hr>
<a class="btn btn-outline-primary" href="{{ route('payment.create') }}">+Add New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Collection Status</th>
      <th scope="col">Plaza Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Vehicle Name</th>
      <th scope="col">Plade Number</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Driving Licence</th>
      <th scope="col">Mobile</th>
      <th scope='col'>Address</th>
      <th scope='col'>Amounts</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $totalTollPrice = 0; // Initialize the total
    @endphp

    @foreach($paymentData as $key => $value)
    <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $value->date }}</td>
      <td>{{ $value->collection_status }}</td>
      <td>{{ $value->payToll->toll_name }}</td>
      <td>{{ $value->payCategory->category_name }}</td>
      <td>{{ $value->payVehicle->vehicle_name }}</td>
      <td>{{ $value->payVehicle->plade_number }}</td>
      <td>{{ $value->payCustomer->customer_name }}</td>
      <td>{{ $value->payCustomer->driving_licence }}</td>
      <td>{{ $value->payCustomer->customer_phone }}</td>
      <td>{{ $value->payCustomer->customer_address }}</td>
      <td>{{ $value->payChart->toll_price }}</td>
      <td>
        <a class="btn btn-info text-white" href="{{ route('payment.show', $value->id) }}">View</a>
      </td>
    </tr>

    @php
    $totalTollPrice += $value->payChart->toll_price; // Add toll_price to total
    @endphp
    @endforeach

    <tr>
      <th scope="col" colspan="11" class="text-end">Total:</th>
      <th scope="col">{{ $totalTollPrice }}</th>
      <th scope="col"></th>
    </tr>
  </tbody>
</table>
{{ $paymentData->links() }}

@endsection
