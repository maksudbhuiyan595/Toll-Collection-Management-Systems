@extends('backend.admin.master')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mt-3 p-3">
        <a class="btn mb-1 btn-outline-info " href="{{route('vehicle.index')}}">Back</a>
            <div class="card-body">
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
            <h1 class="mt-3 text-center"><strong>Vehicle Create From</strong></h1>
          
            <div class="mb-3">
              <label class="form-label">Vehicle Name</label>
              <input type="text" class="form-control"name="vehicle_name" value="" placeholder="enter name">
            </div>
            <div class="mb-3">
              <label class="form-label">Category Name</label>
                <select class="form-control" name="category_id" >
                  @foreach($cats as $value)
                    <option value="{{$value->id}}">{{$value->category_name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Vehicle Plade Name</label>
              <input type="text" class="form-control"name="plade_name" placeholder="enter plade name">
            </div>
            <div class="mb-3">
              <label class="form-label">Vehicle Plade Number</label>
              <input type="number" class="form-control"name="plade_number" placeholder="enter number">
            </div>
            <div class="mb-3">
              <label class="form-label">Vehicle Images</label>
              <input type="file" class="form-control"name="vehicle_image" placeholder="image">
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-outline-success" type="submit">Submit</button>
            </div>
          </form>
  </div>
        </div>
    </div>
</div>

@endsection