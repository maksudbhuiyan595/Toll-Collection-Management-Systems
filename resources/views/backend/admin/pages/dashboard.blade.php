@extends('backend.admin.master')

@section('content')



<h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

<div class="row">
<div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Categories</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1 class="cardData">{{$totalCategory}}</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Vehicle Pass</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1 class="text-center">{{$totalVehicle}}</h1>
                
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
            <h1 class="text-center">{{$totalPayment}}</h1>
               
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Today's Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <!-- <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body text-center"><strong style="font-size:18px;">This Month Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <!--  <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">This Year Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <!--   <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
            </div>
        </div>
    </div>
</div>

@endsection