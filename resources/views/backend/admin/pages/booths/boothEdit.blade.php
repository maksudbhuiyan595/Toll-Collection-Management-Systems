@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('booth.update',$booth->id)}}" method="post" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Booth edit Form</h1>
  <div class="mb-3">
    <label class="form-label">Booth Name</label>
    <input type="text" class="form-control" name="booth_name" placeholder=" Booth Name" value="{{$booth->booth_name}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Card Number</label>
    <input type="text" class="form-control"name="card_number" placeholder="card number" value="{{$booth->card_number}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Booth Pay</label>
    <input type="text" class="form-control" name="booth_pay" placeholder="booth pay" value="{{$booth->booth_pay}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" class="form-control"name="date" placeholder="date" value="{{$booth->date}}" required>
  </div>
  <div class="d-grid gap-2">
    <button class="btn btn-lg btn-outline-success" type="submit">Update</button>
  </div>
</form>
   

@endsection