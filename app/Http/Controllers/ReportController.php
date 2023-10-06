<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function all_report()
    {
        return view('backend.pages.all_report');
    }
 // public function brand_report()
    // {
    //     return view('backend.pages.brandreport');
    // }

   
    public function category_report()
    {
        return view('backend.pages.categoryreport');
    }

    public function customer_report()
    {
        return view('backend.pages.customerreport');
    }

    public function brand_report()
    {
        return view('backend.pages.brandreport');
    }
      public function brand_report_search(Request $request)
      {

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        
        $from=$request->from_date;
        $to=$request->to_date;

        $brands=Brand::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.brandreport',compact('brands'));
}

}