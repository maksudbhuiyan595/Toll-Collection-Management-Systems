<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Toll;
use App\Models\Toll_chart;
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
        $payTollCharts=Toll_chart::all();
        $payVehicles=Vehicle::all();
        $payCategories=Category::all();

        return view('backend.admin.pages.payments.payCreate',compact('payCategories','payVehicles','payTollCharts','payCustomers','payTolls'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'date'              =>'required',
            'pay_category_id'   => 'required',
            'pay_vehicle_id'    => 'required',
            'pay_chart_id'      => 'required',
            'pay_customer_id'   => 'required',
            'pay_toll_id'       => 'required',
        ]);
        
        Payment::create([
            'date'              =>$request->date,
            'pay_category_id'   =>$request->pay_category_id,
            'pay_vehicle_id'    =>$request->pay_vehicle_id,
            'pay_chart_id'      =>$request->pay_chart_id,
            'pay_customer_id'   =>$request->pay_customer_id,
            'pay_toll_id'       =>$request->pay_toll_id,
        ]);

        return redirect()->route('payment.cashOn');
    }
    public function cashOn()
    {
        
        return view('backend.admin.pages.payments.cashOn');
    }
    public function doCash()
    {

        return view('backend.admin.pages.payments.doCash');

    }
    

    public function edit($id)
    {
        $payTolls=Toll::all();
        $payCustomers=Customer::all();
        $payTollCharts=Toll_chart::all();
        $payVehicles=Vehicle::all();
        $payCategories=Category::all();
        $payment=Payment::find($id);

        return view('backend.admin.pages.payments.payEdit',compact('payment','payCategories','payVehicles','payTollCharts','payCustomers','payTolls'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'date'              =>'required',
            'pay_category_id'   => 'required',
            'pay_vehicle_id'    => 'required',
            'pay_chart_id'      => 'required',
            'pay_customer_id'   => 'required',
            'pay_toll_id'       => 'required',
        ]);
        
        $payment=Payment::find($id);
        $payment->update([
            'date'              =>$request->date,
            'pay_category_id'   =>$request->pay_category_id,
            'pay_vehicle_id'    =>$request->pay_vehicle_id,
            'pay_chart_id'      =>$request->pay_chart_id,
            'pay_customer_id'   =>$request->pay_customer_id,
            'pay_toll_id'       =>$request->pay_toll_id,
        ]);

        return redirect()->route('payment.index');
    }

    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect()->back();
    }
    
    public function paymentReport()
    {
        return view('backend.admin.pages.payments.payReport');
    }

    public function  paymentReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $paymentReports=Payment::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.payments.payReport',compact('paymentReports'));
}
   
}