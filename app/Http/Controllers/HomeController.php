<?php

namespace App\Http\Controllers;

use App\Models\Toll_chart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.pages.home');
    }

    public function tollChart(){
    
        $tollCharts= Toll_chart::all();
        return view('frontend.home.pages.tollChart',compact('tollCharts'));
    }
}
