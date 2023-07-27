<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Toll;
use App\Models\TollChat;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {   
        $paymentData=Payment::with(['payCategory', 'payVehicle', 'payChart','payCustomer','payToll'])->paginate(10);
    //    dd($paymentData);
        return view('backend.admin.pages.payments.payIndex', compact('paymentData'));
    }
    public function create()
    {   
        $payTolls=Toll::all();
        $payCustomers=Customer::all();
        $payTollCharts=TollChat::all();
        $payVehicles=Vehicle::all();
        $payCategories=Category::all();

        return view('backend.admin.pages.payments.payCreate',compact('payCategories','payVehicles','payTollCharts','payCustomers','payTolls'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'date'              =>'required',
            'time'              =>'required',
            'pay_category_id'   => 'required',
            'pay_vehicle_id'    => 'required',
            'pay_chart_id'      => 'required',
            'pay_customer_id'   => 'required',
            'pay_toll_id'       => 'required',
        ]);
        
        Payment::create([
            'date'              =>$request->date,
            'time'              =>$request->time,
            'pay_category_id'   =>$request->pay_category_id,
            'pay_vehicle_id'    =>$request->pay_vehicle_id,
            'pay_chart_id'      =>$request->pay_chart_id,
            'pay_customer_id'   =>$request->pay_customer_id,
            'pay_toll_id'       =>$request->pay_toll_id,
        ]);

        return redirect()->route('payment.index');
    }
}
