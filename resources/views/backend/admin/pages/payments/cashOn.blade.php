@extends('backend.admin.master')

@section('content')


        <div class="card p-3 mt-5">
            <div class="card-header">
                <h1>Cash on Delivary</h1>
                <div class="card-body">
                    

                <div id="paymentReport">


                        @if(isset($cashOnData))
                        @foreach($cashOnData as $value)
                        
                      <ul>
                        <li scope="row">{{$loop->iteration}}</li>
                        <li>{{$value->payToll->toll_name}}</li>
                        <li>{{$value->date}}</li>
                        <li>{{$value->time}}</li>
                        <li>{{$value->payCustomer->customer_name}}</li>
                        <li>{{$value->payCategory->category_name}}</li>
                        <li>{{$value->payVehicle->vehicle_name}}</li>
                        <li>{{$value->payChart->toll_price}}</li>
                        
                        </ul>
                        @endforeach
                        @endif
                   
                  
                    </div>
                    <div class="d-grid gap-2">
                        
                            <a class="btn btn-success" href="{{route('payment.index')}}">Cash On Delivary</a>
                            <button onclick="printDiv('paymentReport')" class="btn btn-outline-info">Print</button>
                        
                        </div>

                        <script>
                        function printDiv(divId) {
                            var printContents = document.getElementById(divId).innerHTML;
                            var originalContents = document.body.innerHTML;
                            document.body.innerHTML = printContents;
                            window.print();
                            document.body.innerHTML = originalContents;
                        }
                        </script>
                    </div>    




                </div>
            </div>
        </div>



@endsection