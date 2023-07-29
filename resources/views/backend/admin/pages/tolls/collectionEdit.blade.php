@extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('collection.update',$collection->id)}}" method="post" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Collection edit form</h1>
    <div class="mb-3">
            <label class="form-label">Toll Plaza Name</label>
              <input type="text" class="form-control" name="toll_name" placeholder="toll paza name" value="{{$collection->toll_name}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Gate Number</label>
              <input type="number" class="form-control"name="gate_number" placeholder="gate number" value="{{$collection->gate_number}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Line</label>
              <input type="number" class="form-control"name="road_line" placeholder="road line" value="{{$collection->road_line}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-control" name="toll_category_id">
                @foreach ($tollcats as $value )
                <option @if($collection->toll_category_id == $value->id)selected @endif value="{{$value->id}}">{{$value->category_name}}</option>
                @endforeach
              </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Toll Amounts</label>
            <select class="form-control" name="toll_chart_id">
                @foreach ($tollAmounts as $value )
                <option @if($collection->toll_chart_id == $value->id)selected @endif  value="{{$value->id}}">{{$value->toll_price}}</option>
                @endforeach
                
              </select>
          </div>
            
    
 
  <button type="submit" class="btn btn-lg btn-primary">Update</button>
</form>
   

@endsection