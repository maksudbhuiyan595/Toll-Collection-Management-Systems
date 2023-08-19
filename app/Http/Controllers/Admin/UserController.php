<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            // Toastr::success('message', 'Login Successfully');
            return redirect()->back();
            
        }
       
    }

    public function profile(){
       
        
        return view('backend.admin.pages.profiles.index');
    }
    public function profileUpdate(Request $request ){
        
        $request->validate([

            'user_name'=>'required',
            'user_email'=>'required',
            'change_pass'=>'required',
        ]);
        
        User::create([

            'name'=>$request->user_name,
            'email'=>$request->user_email,
            'password'=>$request->change_pass,
        ]);
        
        return redirect()->back();
    }
    public function logout(){

        auth::logout();

        return redirect()->route('admin.login')->with('message','logout successfully.');
    }
    
}
