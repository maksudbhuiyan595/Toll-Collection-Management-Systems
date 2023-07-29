<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Toll;
use App\Models\Toll_chart;
use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index(){

        $tollCollections=Toll::with(['tollCategory','tollChart'])->paginate(10);
       
        return view('backend.admin.pages.tolls.collectionIndex', compact('tollCollections'));
       
    }
    public function create(){

        $tollcats=Category::all();
        $tollAmounts=Toll_chart::all();
        return view('backend.admin.pages.tolls.collectionCreate',compact('tollAmounts','tollcats'));
        
    }

    public function store(Request $request){
        // dd($request);
       $request->validate([
            'toll_name'             =>'required',
            'gate_number'           => 'required',
            'road_line'             => 'required',
            'toll_category_id'      =>'required',
            'toll_chart_id'         => 'required', 
        ]);

        Toll::create([
            'toll_name'             =>$request->toll_name,
            'gate_number'           =>$request->gate_number,
            'road_line'             =>$request->road_line,
            'toll_category_id'      =>$request->toll_category_id,
            'toll_chart_id'         =>$request->toll_chart_id,
         
        ]);

        return redirect()->route('collection.index')->with('message','toll Successfully Created.');

    }

    public function edit($id)
    {
        $tollcats=Category::all();
        $tollAmounts=Toll_chart::all();
        $collection=Toll::find($id);
        // dd($data);
        return view('backend.admin.pages.tolls.collectionEdit',compact('collection','tollAmounts','tollcats'));
    } 
    public function update(Request $request, $id)
    {
        
        $collection=Toll::find($id);
        // dd($collection);
        $collection->update([
            'toll_name'             =>$request->toll_name,
            'gate_number'           =>$request->gate_number,
            'road_line'             =>$request->road_line,
            'toll_category_id'      =>$request->toll_category_id,
            'toll_chart_id'         =>$request->toll_chart_id,
        ]);
        return redirect()->route('collection.index');
    } 

    public function destroy($id)
    {
        Toll::destroy($id);
        return redirect()->back();
    }

    public function collectionReport()
    {
        return view('backend.admin.pages.tolls.collectionReport');
    }
    public function  collectionReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $collectionReports=Toll::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.tolls.collectionReport',compact('collectionReports'));
    }
}
