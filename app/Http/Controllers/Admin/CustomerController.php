<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer=Customer::with('customerData')->paginate(10);
        return view('backend.admin.pages.customers.customerIndex', Compact('customer'));
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
            'customer_phone'        => 'required|max:13',
            'customer_address'      => 'required'
        ]);
      
        Customer::create([
            'customer_name'          =>$request->customer_name,
            'vehicle_id'           =>$request->vehicle_id,
            'driving_licence'        =>$request->driving_licence,
            'customer_phone'         =>$request->customer_phone,
            'customer_address'       =>$request->customer_address
        ]);

        return redirect()->route('customer.index')->with('message','customer Successfully Created.');

    } 
}
