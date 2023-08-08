<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booth;
use App\Models\Category;
use App\Models\Toll_chart;
use Illuminate\Http\Request;

class BoothController extends Controller
{
    public function index()
    {
        $boothData=Booth::paginate(10);
        return view('backend.admin.pages.booths.boothIndex', compact('boothData'));
    }
    public function create()
    {   
        $categoryData=Category::all();
        $chartData= Toll_chart::all();
        // dd($categoryData);
        return view('backend.admin.pages.booths.boothCreate', compact('categoryData','chartData'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'booth_name'    =>'required',
            'card_number'   =>'required',
            'booth_pay'     =>'required',
            'date'          =>'required',
        ]);

        Booth::create([
            'booth_name'    =>$request->booth_name,
            'card_number'   =>$request->card_number,
            'booth_pay'     =>$request->booth_pay,
            'date'          =>$request->date,
        ]);
        return redirect()->route('booth.index');
    }
    public function edit($id)
    {   
        $booth=Booth::find($id);
        return view('backend.admin.pages.booths.boothEdit',compact('booth'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'booth_name'    =>'required',
            'card_number'   =>'required',
            'booth_pay'     =>'required',
            'date'          =>'required',
        ]);

        $booth=Booth::find($id);
        $booth->update([
            'booth_name'    =>$request->booth_name,
            'card_number'   =>$request->card_number,
            'booth_pay'     =>$request->booth_pay,
            'date'          =>$request->date,
        ]);

        return redirect()->route('booth.index');   
    }
    
    public function destroy($id)
    {
        Booth::destroy($id);
        return redirect()->back();
    }

    public function boothReport()
    {
        return view('backend.admin.pages.booths.boothReport');
    }
    public function  boothReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $boothReports=Booth::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.booths.boothReport',compact('boothReports'));
    }
}
