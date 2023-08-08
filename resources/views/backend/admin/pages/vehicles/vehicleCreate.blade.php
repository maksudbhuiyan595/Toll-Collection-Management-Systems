@extends('backend.admin.master')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mt-3 p-5">

            <div class="card-body">
                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
          <form action="{{route('vehicle.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                  @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{$err}}</p>
                    @endforeach
                  @endif

            
               <a class="btn btn-outline-secondary " href="{{route('vehicle.index')}}">Back</a>
            <h1 class="text-center"><strong>Vehicle Create From</strong></h1>
            <hr>
          
            <div class="mb-3">
              <label class="form-label"><strong>Vehicle Name:</strong></label>
              <input type="text" class="form-control"name="vehicle_name" placeholder="Enter name" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><strong>Category Name:</strong></label>
                <select class="form-control" name="category_id" required>
                  @foreach($cats as $value)
                    <option value="{{$value->id}}">{{$value->category_name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="mb-3">
              <label class="form-label"><strong>Vehicle Plade Name:</strong></label>
              <input type="text" class="form-control"name="plade_name" placeholder="Enter plade name" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><strong>Vehicle Plade Number:</strong></label>
              <input type="text" class="form-control"name="plade_number" placeholder="Enter number" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><strong>Vehicle Images:</strong></label>
              <input type="file" class="form-control"name="vehicle_image" placeholder="image" required>
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