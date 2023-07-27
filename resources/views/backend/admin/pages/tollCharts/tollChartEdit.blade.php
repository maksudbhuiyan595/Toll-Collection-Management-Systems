@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('toll-chart.update',$tollChart->id)}}" method="post" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3"> Toll-Chart Edit Form</h1>

  <div class="mb-3">
    <label class="form-label">Category Name</label>

    <select class="form-control" name="category_id" required>
     @foreach ($cats as $value)
     <option @if($tollChart->category_id==$value->id) selected @endif value="{{$value->id}}">{{$value->category_name}}</option>
     @endforeach
    </select>

  </div>
  <div class="mb-3">
    <label class="form-label">Tolls</label>
    <input type="number" class="form-control"name="toll_price"  placeholder="Entet toll amount" required>
  </div>

  <button type="submit" class="btn btn-lg btn-outline-success">Update</button>
</form>
   

@endsection