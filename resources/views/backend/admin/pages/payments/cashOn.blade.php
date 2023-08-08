@extends('backend.admin.master')

@section('content')

        <div class="row">
            <div class="col-md-6 offset-md-3">
             
                <div class="card p-3 mt-3">
                    <div class="card-header">
                        <h1>Payment</h1>
                        <div class="card-body">
                            <div id="paymentReport">
                            
                               <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    @foreach ($cashOnData as $data)
                                        
                                           
                                            <option  value="{{$data->id}}">{{$data->date}}</option>
                            
                                        
                                    @endforeach
                                        
                                </div>
                               </div>
                            </div>
                            <div class="d-grid gap-2">
                                
                            <a class="btn btn-success" href="{{route('payment.index')}}">Back</a>
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