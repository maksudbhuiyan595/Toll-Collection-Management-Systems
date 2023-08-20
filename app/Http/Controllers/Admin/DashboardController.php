<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalVehicle= Vehicle::count();
        $totalCategory= Category::count();
        return view('backend.admin.pages.dashboard', compact('totalVehicle',  'totalCategory'));
    }
 
}
