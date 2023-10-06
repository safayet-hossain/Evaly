<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function registration()
    {

        return view('frontend.pages.registration');

    }
    public function do_registration(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        // dd($request->all());

        $data=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'customer',
            'password'=>bcrypt($request->password),
        ]);
        
        // dd($data);

        Toastr::success('Registration done');
        return to_route('login');



    }

    public function reset()
    {

        return view('frontend.pages.reset');

    }


}
