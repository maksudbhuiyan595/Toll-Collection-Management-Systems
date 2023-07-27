<!-- @extends('backend.admin.master')

@section('content')

  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<form action="{{route('toll.update',$data->id)}}" method="post" >

  @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
  @endif

    @csrf
    <h1 class="mt-3">Update toll Collection</h1>
          <div class="mb-3">
            <label class="form-label">Toll Plaza Name</label>
              <input type="text" class="form-control" name="toll_name" value="{{$data->id}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Gate Number</label>
              <input type="number" class="form-control"name="gate_number"value="{{$data->id}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Line</label>
              <input type="number" class="form-control"name="road_line"value="{{$data->id}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Category Name</label>
              <input type="text" class="form-control"name="toll_category_id"value="{{$data->id}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Collection Amounts</label>
              <input type="number" class="form-control"name="toll_chart_id"value="{{$data->id}}">
          </div>
    
 
  <button type="submit" class="btn btn-lg btn-primary">Update</button>
</form>
   

@endsection -->