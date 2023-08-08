@extends('backend.admin.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card m-3 p-5">
      
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif

<form action="" method="" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Booth</h1>
  <div class="mb-3">
    <label class="form-label">Booth Name</label>
    <input type="text" class="form-control" name="booth_name" placeholder="Name" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Card Number</label>
    <input type="text" class="form-control"name="card_number" placeholder="card number" required>
  </div>
<!-- @dd($categoryData) -->
  <div class="mb-3">
    <label class="form-label">Category Name</label>
    <select name="category_id" class="form-control" >
    @foreach ($categoryData as $value)
    <option value="{{$value->id}}">{{$value->category_name}}</option>
    @endforeach
    
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Booth Pay</label>
    <select name="toll_cahrt_id" class="form-control" >

    <option value=""></option>
    </select>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" class="form-control"name="date" placeholder="date" required>
  </div>
  <div class="d-grid gap-2">
    <button class="btn  btn-outline-success" type="submit">Submit</button>
  </div>
</form>
</div>
  </div>
 </div>

@endsection