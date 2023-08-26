<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
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
            
            Toastr::success('Successfully Login', 'User');
            return redirect()->back();
            
        }
       
    }

    public function profileShow(){

       $user=User::all();
        return view('backend.admin.pages.profiles.index',compact('user'));
    }

    public function updateprofile(Request $request,$id){
        $user= User::find($id);
        $user->update([
            'name'=>$request->user_name,
            'email'=>$request->user_email,
            'password'=>$request->change_pass
        ]);

        Toastr::success('Update successfully');
        return redirect()->route('profile.show');

    }
   
    public function logout(){

        auth::logout();

        Toastr::success('Successfully Logout', 'User');
        return redirect()->back();
    }
    
}
