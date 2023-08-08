@extends('backend.admin.master')

@section('content')

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="text-center">Payment</h1>
                            <hr>
                        <div class="card-body">

                            </div>
                            <div class="d-grid gap-2">
                                
                            <a class="btn btn-lg btn-outline-secondary mb-5" href="{{route('payment.doCash')}}">Cash On Delivary</a>
                    </div>    
                </div>
            </div>
        </div>
  

@endsection