@extends('backend.admin.master')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mt-3 p-3">
       
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

            <form action="{{route('vehicle.update',$vehicle->id)}}" method="post">
                @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $err)
                            <p class="alert alert-danger">{{$err}}</p>
                            @endforeach
                        @endif

               
                <a class="btn mb-1 btn-outline-secondary " href="{{route('vehicle.index')}}">Back</a>
                <h1 class="mt-3 text-center"><strong>Vehicle Edit Form </strong></h1>
                <hr>
            
                <div class="mb-3">
                    <label class="form-label"><strong>Vehicle Name:</strong></label>
                    <input type="text" class="form-control"name="vehicle_name" value="{{$vehicle->vehicle_name}}" placeholder="Enter name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Category Name:</strong></label>
                        <select class="form-control" name="category_id">
                            @foreach($cats as $value)
                                <option @if($vehicle->category_id == $value->id) selected @endif value="{{$value->id}}">{{$value->category_name}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Vehicle Plade Name:</strong></label>
                    <input type="text" class="form-control"name="plade_name" placeholder="Enter vehicle pldae name" value="{{$vehicle->plade_name}}">
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Vehicle Plade Number:<strong></label>
                    <input type="number" class="form-control"name="plade_number" placeholder="Enter plade number" value="{{$vehicle->plade_number}}">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-outline-success" type="submit">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection