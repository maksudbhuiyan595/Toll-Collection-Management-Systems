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

<form action="{{route('collection.store')}}" method="post" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Create New Colletion</h1>
          <div class="mb-3">
            <label class="form-label">Toll Plaza Name</label>
              <input type="text" class="form-control" name="toll_name" >
          </div>
          <div class="mb-3">
            <label class="form-label">Gate Number</label>
              <input type="number" class="form-control"name="gate_number">
          </div>
          <div class="mb-3">
            <label class="form-label">Line</label>
              <input type="number" class="form-control"name="road_line">
          </div>
          <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-control" name="toll_category_id">
                @foreach ($tollcats as $value )
                <option value="{{$value->id}}">{{$value->category_name}}</option>
                @endforeach
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Toll Amounts</label>
            <select class="form-control" name="toll_chart_id">
                @foreach ($tollAmounts as $value )
                <option value="{{$value->id}}">{{$value->toll_price}}</option>
                @endforeach
                
              </select>
          </div>
          <div class="d-grid gap-2">
    <button class="btn btn-outline-success" type="submit">Submit</button>
  </div>
</form>
</div>
  </div>
 </div>
@endsection