<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TollChat;
use App\Models\Toll;
use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index(){
        $tollCollections=Toll::with(['tollCategory','tollChart'])->paginate(10);
       
        return view('backend.admin.pages.tolls.tollIndex', compact('tollCollections'));
       
    }
    public function create(){
        $tollcats=Category::all();
        $tollAmounts=TollChat::all();
        return view('backend.admin.pages.tolls.tollCreate',compact('tollAmounts','tollcats'));
        
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

        return redirect()->route('toll.index')->with('message','toll Successfully Created.');

    }
    /* public function edit($id)
    {
        $data=Toll::find($id);
        // dd($data);
        return view('backend.admin.pages.tolls.edit',compact('data'));
    } */
   /*  public function update(Request $request, $id)
    {
        $updatedata=Toll::find($id);
        $updatedata->update([
            'toll_name'             =>$request->toll_name,
            'gate_number'           =>$request->gate_number,
            'road_line'             =>$request->road_line,
            'toll_category_id'      =>$request->toll_category_id,
            'toll_chart_id'         =>$request->toll_chart_id,
        ]);
        return redirect()->route('toll.index');
    } */
}
