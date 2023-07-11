@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Category</h1>
  <div class="mb-3">
    <label class="form-label">Category Name</label>
    <input type="text" class="form-control" name="category_name" >
  </div>
  <div class="mb-3">
    <label class="form-label">Category Image</label>
    <input type="file" class="form-control"name="category_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

@endsection