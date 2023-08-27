@extends('backend.admin.master')

@section('content')

<h1 class="mt-4"><strong>Dashboard</strong></h1>
<hr>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Categories</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1 class="">{{ $totalCategory }}</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Vehicle Pass</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h1 class="">{{ $totalVehicle }}</h1>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Total Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between"><br>
                <h1 class=""> {{ $totalTollPrice }} Tk.</h1>
                <div class="small text-white"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">Today's Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                 <strong class="">{{ $totalDailyCount }} Tk <br>Last updated at: <br>{{ $lastUpdatedTimestamp ? $lastUpdatedTimestamp->diffForHumans() : 'N/A' }}</strong>
                <div class="small text-white"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">This Month Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <h1>{{ $monthlyTotal }} Tk.</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body text-center"><strong style="font-size: 18px;">This Year Payment Collection</strong></div>
            <div class="card-footer d-flex align-items-center justify-content-between">

                <h1>{{ $yearlyTotal }} Tk.</h1>
            </div>
        </div>
    </div>
</div>

@endsection
