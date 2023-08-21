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

    
        <div class="container">
            <h2 class="mb-3" style="text-align: center">Customer Information</h2>
            <hr>
            <div class="data-item">
                <span class="data-label">Customer Name:</span>
                <span class="data-value">{{$customerData->customer_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Vehicle Name:</span>
                <span class="data-value">{{$customerData->customerData->vehicle_name}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Driving Licence:</span>
                <span class="data-value">{{$customerData->driving_licence}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Phone Number:</span>
                <span class="data-value">{{$customerData->customer_phone}}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Customer Address:</span>
                <span class="data-value">{{$customerData->customer_address}}</span>
            </div>
           
       
            </div>
    </body>
</html>

   


@endsection

   
 