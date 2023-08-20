@extends('backend.admin.master')
@section('content')
<div class="conatiner">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card mt-3">
        <div class="card-header">
          <div class="card-body">
              <form action="{{route('collection.update', $collection->id)}}" method="post">
                @csrf
                <h1 class="mt-3">Collection Edit Form</h1>
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
                    
                  <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
        

        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   

@endsection