@extends('backend.admin.master')

@section('content')

<h1 class="mt-4">Booths</h1>
<a class="btn btn-outline-primary" href="{{route('booth.create')}}">Create New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Booth Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">Amounts</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>

    @foreach($boothData as $value)

    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->booth_name}}</td>
      <td>{{$value->card_number}}</td>
      <td>{{$value->booth_pay}}</td>
      <td>{{$value->date}}</td>
      <td>
        <a class="btn btn-warning" href="">edit</a>
        <a class="btn btn-danger" href="">delete</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

{{ $boothData->links()}}

@endsection