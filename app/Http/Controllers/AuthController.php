<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('backend.pages.login.login');
    }

    public function do_login(Request $request){

        // Validate
        $credentials=$request->except('_token');
        // dd($credentials);
        if(auth()->attempt($credentials)){
            Toastr::success('Login Successfully');
            return to_route('dashboard')->with('msg', 'success.');
        }
        else
        return to_route('login');
    }

    public function logout(){

        Auth::logout();
        Toastr::success('Logout Successfully');
        return to_route('login')->with('msg', 'logout.');


    }



}
