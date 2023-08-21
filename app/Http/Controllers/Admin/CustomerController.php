<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers=Customer::with('customerData')->paginate(10);
        return view('backend.admin.pages.customers.customerIndex', Compact('customers'));
    }

    public function create(){
        $names=Vehicle::all();
        return view('backend.admin.pages.customers.customerCreate',compact('names'));
       
    }

        public function store(Request $request){
        //dd($request);
       $request->validate([
            'customer_name'         =>'required',
            'vehicle_id'            => 'required',
            'driving_licence'       =>'required',
            'customer_phone'        => 'required',
            'customer_address'      => 'required'
        ]);
      
        Customer::create([
            'customer_name'          =>$request->customer_name,
            'vehicle_id'             =>$request->vehicle_id,
            'driving_licence'        =>$request->driving_licence,
            'customer_phone'         =>$request->customer_phone,
            'customer_address'       =>$request->customer_address
        ]);

        Toastr::success('Successfully Created', 'Customer');
        return redirect()->back();
    } 

    public function show($id){
        $customerData= Customer::find($id);
        return view('backend.admin.pages.customers.customerShow',compact('customerData'));
    }

    public function edit($id)
    {
        $names=Vehicle::all();
        $customers=Customer::find($id);
        return view('backend.admin.pages.customers.customerEdit',compact('customers','names'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name'         =>'required',
            'vehicle_id'            => 'required',
            'driving_licence'       =>'required',
            'customer_phone'        => 'required',
            'customer_address'      => 'required'
        ]);

      $customer=Customer::find($id);
      $customer->update([
            'customer_name'          =>$request->customer_name,
            'vehicle_id'             =>$request->vehicle_id,
            'driving_licence'        =>$request->driving_licence,
            'customer_phone'         =>$request->customer_phone,
            'customer_address'       =>$request->customer_address
        ]);

        Toastr::success('Successfully Updated', 'Customer');
        return redirect()->back();

    }
    public function destroy($id)
    {
        Customer::destroy($id);
        Toastr::error('Successfully Deleted', 'Customer');
        return redirect()->back();
    }

    public function customerReport()
    {
        return view('backend.admin.pages.customers.customerReport');
    }
    public function  customerReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $customerReports=Customer::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.customers.customerReport',compact('customerReports'));
    }
}
