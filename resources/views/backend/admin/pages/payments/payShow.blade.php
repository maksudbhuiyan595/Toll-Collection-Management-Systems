@extends('backend.admin.master')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data View Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .data-item {
            margin-bottom: 15px;
        }

        .data-label {
            font-weight: bold;
        }

        .data-value {
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <div id="payPrint">
        <div class="container">
            <h2 class="mb-3" style="text-align: center">Payment Information</h2>
            <hr>
            <div class="data-item">
                <span class="data-label">Date:</span>
                <span class="data-value">{{$payment->date}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">collection Status:</span>
                <span class="data-value">{{$payment->collection_status}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Plaza Name</span>
                <span class="data-value">{{$payment->payToll->toll_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Category Name:</span>
                <span class="data-value">{{$payment->payCategory->category_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Vehicle Name</span>
                <span class="data-value">{{$payment->payVehicle->vehicle_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Plade Number</span>
                <span class="data-value">{{$payment->payVehicle->plade_number}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Customer Name</span>
                <span class="data-value">{{$payment->paycustomer->customer_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Driving Licence</span>
                <span class="data-value">{{$payment->paycustomer->driving_licence}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Mobile</span>
                <span class="data-value">{{$payment->paycustomer->customer_phone}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Address:</span>
                <span class="data-value">{{$payment->paycustomer->customer_address}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Amounts:</span>
                <span class="data-value">{{$payment->payChart->toll_price}}</span>
            </div>

            <div class="d-grid gap-2">
                <button onclick="printDiv('payPrint')" class="btn btn-sm btn-outline-info">Print</button>

            <!-- Add more data items as needed -->
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
    </body>
</html>

   


@endsection

   
 