@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card m-3 p-5">
    <a class="btn mb-1 btn-outline-secondary " href="{{route('category.index')}}">Back</a>
          @if(session()->has('msg'))
            
          <div class="alert alert-success">
                  {{ session()->get('msg') }}
              </div>
          @endif

      <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

        @if($errors->any())
          @foreach($errors->all() as $err)
          <p class="alert alert-danger">{{$err}}</p>
          @endforeach
        @endif

        @csrf
        <h2 class="mt-3 text-center"><strong>Category Create Form</strong></h2>

        <div class="mb-3">
          <label class="form-label">Category Name</label>
          <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Category Image</label>
          <input type="file" class="form-control"name="category_image" placeholder="Image" required>
        </div>
      
        <div class="d-grid gap-2">
          <button class="btn btn-outline-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
 </div>
@endsection