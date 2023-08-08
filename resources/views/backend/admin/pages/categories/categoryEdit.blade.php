@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-3 p-5">
   
          @if(session()->has('msg'))
            
          <div class="alert alert-success">
                  {{ session()->get('msg') }}
              </div>
          @endif

      <form action="{{route('category.update',$category->id)}}" method="post">
      @csrf
            @if($errors->any())
              @foreach($errors->all() as $err)
              <p class="alert alert-danger">{{$err}}</p>
              @endforeach
            @endif

      
        <a class="btn btn-outline-secondary " href="{{route('category.index')}}">Back</a>
        <h2 class="text-center"><strong>Category Edit Form</strong></h2>
        <hr>

        <div class="mb-3">
          <label class="form-label"><strong>Category Name:</strong></label>
          <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}" placeholder="Enter Category Name" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label"><strong>Category Status</strong></label>
          <select name="status" class="form-control">
            <option value="active">Active</option>
            <option value="deactive">DeActive</option>
          </select>
        </div>
     
        <div class="d-grid gap-2">
          <button class="btn btn-outline-success" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
 </div>
@endsection