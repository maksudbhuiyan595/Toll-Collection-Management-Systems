<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Vehicle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicles=Vehicle::with('vehicleData')->paginate(10);
        // dd($vehicle);
        return view('backend.admin.pages.vehicles.vehicleIndex',compact('vehicles'));
    }

    public function create(){
        $cats=Category::all();
        return view('backend.admin.pages.vehicles.vehicleCreate',Compact('cats'));
    }

    public function store(Request $request){
        //dd($request);
       $request->validate([
            'vehicle_name'        =>'required',
            'category_id'         =>'required',
            'plade_name'          => 'required',
            'plade_number'        => 'required',
            'vehicle_image'       => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
         
        $fileName= null;
        if($request->hasfile('vehicle_image')){
            $image=$request->file('vehicle_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/vehicles',$fileName);
        }

       // dd($fileName);
      
       Vehicle::create
       ([
            'vehicle_name'      =>$request->vehicle_name, 
            'category_id'       =>$request->category_id,
            'plade_number'     =>$request->plade_name.'-'.$request->plade_number,
            'vehicle_image'    =>$fileName
        ]); 

        return redirect()->route('vehicle.index')->with('message','Vehicle Successfully Created.');

    }
    public function show($id){

        $vehicleData= Vehicle::find($id);
        return view('backend.admin.pages.vehicles.vehicleShow', compact('vehicleData'));
    }

    public function edit($id)
    {
        $vehicle=Vehicle::find($id);
        $cats=Category::all();
        // dd($vehicle);
        return view('backend.admin.pages.vehicles.vehicleEdit',compact('vehicle','cats'));
    }
    public function update(Request $request,$id)
    {
        $vehicle=Vehicle::find($id);
        $vehicle->update([

            'vehicle_name'      =>$request->vehicle_name, 
            'category_id'       =>$request->category_id,
            'plade_number'     =>$request->plade_name.'-'.$request->plade_number
           

        ]);
        return redirect()->back()->with('msg','update successfully');
    }
    public function destroy($id)
    {
        Vehicle::destroy($id);

        return redirect()->back();
    }
    public function vehicleReport()
    {
        return view('backend.admin.pages.vehicles.vehicleReport');
    }
    public function  vehicleReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $vehicleReports=Vehicle::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.vehicles.vehicleReport',compact('vehicleReports'));
    }
}
