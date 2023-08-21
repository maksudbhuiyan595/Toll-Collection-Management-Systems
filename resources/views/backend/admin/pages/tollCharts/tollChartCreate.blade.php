@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5">
        <div class="card-header">
          <div class="card-body">


              <form action="{{route('toll-chart.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <a class="btn btn-outline-secondary" href="{{route('toll-chart.index')}}">Back</a>
                  <h1 class="text-center"><strong>Create New Toll Chart</strong></h1>
                  <hr>

                <div class="mb-3">
                  <label class="form-label"><strong>Category Name:</strong></label>

                  <select class="form-control" name="category_id" required>
                  @foreach ($cats as $value)
                  <option value="{{$value->id}}">{{$value->category_name}}</option>
                  @endforeach
                  </select>

                </div>
                
                <div>
                    <input type="hidden" name="total_toll_price">
                </div>

                <div class="mb-3">
                  <label class="form-label"><strong>Toll:</strong></label>
                  <input type="number" class="form-control"name="toll_price"  placeholder="Entet toll amount" required>
                </div>

                <div class="mb-3">
                  <label class="form-label"><strong>Image:</strong></label>
                  <input type="file" class="form-control"name="toll_image"  placeholder="image" required>
                </div>
                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-success">Submit</button>
                </div>
              </form>
          </div>
        </div>

    </div>
  </div>
 </div>
@endsection
