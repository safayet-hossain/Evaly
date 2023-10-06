<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    
    {
        $customer=Customer::paginate(5);
        return view('backend.pages.customer',compact('customer'));

    }

    public function customerinfo()
        {
        return view('backend.pages.customerinfo');
        
    }
    
    public function store(Request $request){
        // dd($request->all());
        Customer::create([
            // clm name=>$request->inpt field
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,     
        ]);
        return to_route('customer');
        
    }


}

