@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('booth.store')}}" method="post" >

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
  <div class="mb-3">
    <label class="form-label">Booth Pay</label>
    <input type="text" class="form-control" name="booth_pay" placeholder="booth pay" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" class="form-control"name="date" placeholder="date" required>
  </div>
  <div class="d-grid gap-2">
    <button class="btn  btn-outline-success" type="submit">Submit</button>
  </div>
</form>
   

@endsection