@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('vehicle.store')}}" method="post" enctype="multipart/form-data">

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Vehicle</h1>
  
    <div class="mb-3">
    <label class="form-label">Vehicle Name</label>
    <input type="text" class="form-control"name="vehicle_name" value="">
  </div>
  <div class="mb-3">
    <label class="form-label">Category Name</label>
      <select class="form-control" name="category_id">
        @foreach($cats as $value)
          <option value="{{$value->id}}">{{$value->category_name}}</option>
        @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Vehicle Plade Name</label>
    <input type="text" class="form-control"name="plade_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Plade Number</label>
    <input type="number" class="form-control"name="plade_number">
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Images</label>
    <input type="file" class="form-control"name="vehicle_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

@endsection