<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.admin.pages.dashboard');
    }
  /*   public function search(Request $request)
    {
        dd($request->all());
    } */
}
