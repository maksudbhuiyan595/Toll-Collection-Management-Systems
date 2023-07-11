<?php

namespace App\Http\Controllers\Admin;

use App\Models\Toll;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index(){
        $toll=Toll::all();
        return view('backend.admin.pages.tolls.tollIndex', Compact('toll'));
    }

    public function create(){
        return view('backend.admin.pages.tolls.tollCreate');
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
            'customer_address'      => 'required',
            'toll'                  => 'required',
            'vehicle_image'         => 'required'
        ]);

        $fileName= null;
        if($request->hasfile('vehicle_image')){
            $image=$request->file('vehicle_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/tolls',$fileName);
        }
      
        Toll::create([
            'customer_name'          =>$request->customer_name,
            'vehicle_name'           =>$request->vehicle_name,
            'vehicle_plade_name'     =>$request->vehicle_plade_name,
            'vehicle_plade_number'   =>$request->vehicle_plade_number,
            'driving_licence'        =>$request->driving_licence,
            'customer_phone'         =>$request->customer_phone,
            'customer_address'       =>$request->customer_address,
            'toll'                   =>$request->toll,
            'vehicle_image'          =>$fileName
        ]);

        return redirect()->route('toll.index')->with('message','toll Successfully Created.');

    }
}
