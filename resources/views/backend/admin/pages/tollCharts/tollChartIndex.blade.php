@extends('backend.admin.master')

@section('content')

<h1 class="mt-4 text-center"><strong>All Category Toll-Charts</strong></h1>
<a class="btn btn-outline-primary" href="{{route('toll-chart.create')}}">+Add New</a>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Amounts</th>
      <th scope="col">Image</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($tollCharts as $value)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$value->tollData->category_name}}</td>
      <td>{{$value->toll_price}}</td>
      <td>
        <img style="width:60px;
                    height:60px;"
      
         src="{{url('/uploads/categories/'.$value->tollData->category_image)}}" alt="image">
      </td>
      <td>
        <a class="btn btn-warning text-white" href="{{route('toll-chart.edit',$value->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('toll-chart.destroy',$value->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  
{{$tollCharts->links()}}

@endsection