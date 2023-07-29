<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::paginate(10);
        return view('backend.admin.pages.categories.categoryIndex', Compact('categories'));
    }

    public function create()
    {
        return view('backend.admin.pages.categories.categoryCreate');
    }
    public function store(Request $request)
    {
        //dd($request);
       $request->validate([
            'category_name'  =>'required',
             'category_image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
         
        $fileName= null;
        if($request->hasfile('category_image')){
            $image=$request->file('category_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/categories',$fileName);
        }

       // dd($fileName);
      
        Category::create([
            'category_name'  =>$request->category_name, 
            'category_image' =>$fileName
        ]);

        return redirect()->back()->with('msg','Category Successfully Created.');

    }
    public function edit($id)
    {   
        $category=Category::find($id);
        return  view('backend.admin.pages.categories.categoryEdit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'  =>'required',
             
        ]);
      $category=Category::find($id);
      $category->update([
            'category_name'  =>$request->category_name, 
            
        ]);

        return redirect()->back()->with('msg','Update Successfully.');
    }
    public function destroy($id)
    {
       
        Category::destroy($id);

        return redirect()->back();

    }
    public function categoryReport()
    {
        return view('backend.admin.pages.categories.categoryReport');
    }
    public function  categoryReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $reportCategory=Category::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.admin.pages.categories.categoryReport',compact('reportCategory'));
    }
}
