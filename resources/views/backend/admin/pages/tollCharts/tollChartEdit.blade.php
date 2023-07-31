@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-3 p-5">

          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif

  <form action="{{route('toll-chart.update',$tollChart->id)}}" method="post" >
    @csrf
          @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>
            @endforeach
          @endif

 
    <a class="btn btn-secondary" href="{{route('toll-chart.index')}}">Back</a>
    <h1 class="mt-3 text-center"><strong>Toll-Chart Edit Form</strong></h1>
    <hr>

  <div class="mb-3">
    <label class="form-label"><strong>Category Name:</strong></label>

    <select class="form-control" name="category_id" required>
     @foreach ($cats as $value)
     <option @if($tollChart->category_id==$value->id) selected @endif value="{{$value->id}}">{{$value->category_name}}</option>
     @endforeach
    </select>

  </div>
  <div class="mb-3">
    <label class="form-label"><strong>Toll:</strong></label>
    <input type="number" class="form-control"name="toll_price"  placeholder="Entet toll amount" required>
  </div>

  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-success">Update</button>
  </div>
</form>
</div>
  </div>
 </div> 

@endsection