@extends('frontend.home.master')


@section('content')


  <!-- tollChart  start section -->
  <div class="container">
    <div class="row">
      <h1 class="text-center"><strong>Toll Charts</strong></h1>
      <hr>

      @foreach ($tollCharts as $value )
      <div class="col-md-3">
        <div class="card bg-primary text-white mb-5">
          <div class="card-header">
            <div class="card-body ">
            <img 
                style="width:250px;
                      height:200px;"
                src="{{url('/uploads/categories',$value->TollData->category_image)}}" alt="image">
                <hr>

              <p><span>Name: </span>{{$value->TollData->category_name}}</p>
              <p><span>Status: </span>{{$value->TollData->category_status}}</p>
              <h1 class="badge bg-danger p-4"><span>Amounts: </span>{{$value->toll_price}} <span> Taka</span></h1>
            </div>
          </div>
        </div>
      </div>

      @endforeach
      
    </div>
    </div>
<!-- tollCharts end section -->

@endsection