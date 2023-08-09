<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login()
    {
        return view('backend.admin.pages.login');
    }
    public function doLogin(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email'     =>'required|email',
            'password'  =>'required|min:6'
        ]);
        

        $credentials=$request->except(['_token']);

       //dd($credentials);

        if (Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors(['Invalid login information']);
        }
       
    }

    public function adminProfile(){
        return view('backend.admin.pages.profiles.index');
    }
    public function logout(){

        auth::logout();

        return redirect()->route('admin.login')->with('message','logout successfully.');
    }
    
}
