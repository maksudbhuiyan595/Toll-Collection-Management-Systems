@extends('backend.admin.master')

@section('content')

<h1 class="mt-4 text-center">Toll Lists</h1>
<a class="btn btn-lg btn-outline-primary" href="{{route('toll.create')}}">Create New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Toll Plaza Name</th>
      <th scope="col">Gate Number</th>
      <th scope="col">Line Number</th>
      <th scope="col">Category Name</th>
      <th scope="col">Collection Amounts</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>
  <tbody>
    
    @foreach($tollCollections as $value)
    
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->toll_name}}</td>
      <td>{{$value->gate_number}}</td>
      <td>{{$value->road_line}}</td>
      <td>{{$value->tollCategory->category_name}}</td>
      <td>{{$value->tollChart->toll_price}}</td>
      <td>
        <a class="btn btn-info" href="">edit</a>
        <a class="btn btn-danger" href="">delete</a>
      </td>
      
    </tr>

    @endforeach

  </tbody>
</table>
{{ $tollCollections->links()}}

@endsection