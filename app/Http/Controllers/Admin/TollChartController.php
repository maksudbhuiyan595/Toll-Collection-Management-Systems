<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Toll_chart;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TollChartController extends Controller
{
    public function index()
    {
        $tollCharts = Toll_chart::with('TollData')
                            ->orderByDesc('created_at') // Order by date in descending order
                            ->paginate(10);
        // dd($tollCharts);
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

         //dd($request->all());

        $fileName=null;
        if($request->hasFile('toll_image')){
            $image=$request->file('toll_image');
            $fileName=date('Ydmysi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/tollcharts',$fileName);
        }

       //dd($fileName);



       $tollChart = Toll_chart::create([

        'category_id'   =>$request->category_id,
        'toll_price'    =>$request->toll_price,
        'image'         =>$fileName,

       ]);

       $totalTollPrice = Toll_chart::sum('toll_price');

       $tollChart->update(['total_toll_price' => $totalTollPrice]);

       Toastr::success('Successfully Created', 'Toll Chart');
       return redirect()->back();
    }
    public function edit($id)
    {
        $tollChart=Toll_chart::find($id);
        $cats=Category::all();
        return view('backend.admin.pages.tollCharts.tollChartEdit', compact('tollChart','cats'));
    }

    public function update(Request $request, $id)
    {
        $tollChart=Toll_chart::find($id);

        $tollChart->update([
        'category_id'   =>$request->category_id,
        'toll_price'    =>$request->toll_price,

        ]);
        Toastr::success('Successfully Updated', 'Toll Chart');
        return redirect()->back();
    }
    public function destroy($id)
    {
        Toll_chart::destroy($id);

        Toastr::error('Successfully Deleted', 'Toll Chart');
        return redirect()->back();
    }
    public function tollChartReport()
    {
        return view('backend.admin.pages.tollCharts.tollChartReport');
    }
    public function  tollChartReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;


        $tollChartReports=Toll_chart::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);

        return view('backend.admin.pages.tollCharts.tollChartReport',compact('tollChartReports'));
    }
}
