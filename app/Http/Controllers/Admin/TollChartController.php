<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\TollChat;
use App\Http\Controllers\Controller;
use App\Models\Toll;
use Illuminate\Http\Request;

class TollChartController extends Controller
{
    public function index()
    {   
        $tollCharts=TollChat::with('TollData')->paginate(10);
        return view('backend.admin.pages.tollCharts.tollChartIndex',compact('tollCharts'));
    }
    public function create()
    {
        $cats=Category::all();
        return view('backend.admin.pages.tollCharts.tollChartCreate',compact('cats'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id'     =>'required',
            'toll_price'      => 'required',
            'toll_image'      => 'required'
        ]);

        // dd($request->all());

        $fileName=null;
        if($request->hasFile('toll_image')){
            $image=$request->file('toll_image');
            $fileName=date('Ydmysi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/tollcharts',$fileName);
        }

       //dd($fileName);

       TollChat::create([

        'category_id'   =>$request->category_id,
        'toll_price'    =>$request->toll_price,
        'image'         =>$fileName
        
       ]);
       
       return redirect()->route('toll-chart.index')->with('successfully created ');
    }
    public function edit($id)
    {
        $tollChart=TollChat::find($id);
        $cats=Category::all();
        return view('backend.admin.pages.tollCharts.tollChartEdit', compact('tollChart','cats'));
    }

    public function update(Request $request, $id)
    {
        $tollChart=TollChat::find($id);

        $tollChart->update([
        'category_id'   =>$request->category_id,
        'toll_price'    =>$request->toll_price,

        ]);
        return redirect()->back()->with('msg','update successfully');
    }
    public function destroy($id)
    {
        TollChat::destroy($id);
        return redirect()->back();
    }
}
