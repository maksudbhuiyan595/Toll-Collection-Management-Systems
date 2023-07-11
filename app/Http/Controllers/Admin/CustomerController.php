<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer=Customer::all();
        return view('backend.admin.pages.customers.customerIndex', Compact('customer'));
    }

    public function create(){
        return view('backend.admin.pages.customers.customerCreate');
    }

    public function store(Request $request){
        //dd($request);
       $request->validate([
            'customer_name'         =>'required',
            'vehicle_name'          => 'required',
            'vehicle_plade_name'    => 'required',
            'vehicle_plade_number'  => 'required|min:4|max:10',
            'driving_licence'       =>'required',
            'customer_phone'        => 'required|max:13',
            'customer_address'      => 'required'
        ]);
      
        Customer::create([
            'customer_name'          =>$request->customer_name,
            'vehicle_name'           =>$request->vehicle_name,
            'vehicle_plade_name'     =>$request->vehicle_plade_name,
            'vehicle_plade_number'   =>$request->vehicle_plade_number,
            'driving_licence'        =>$request->driving_licence,
            'customer_phone'         =>$request->customer_phone,
            'customer_address'       =>$request->customer_address
        ]);

        return redirect()->route('customer.index')->with('message','customer Successfully Created.');

    }
}
