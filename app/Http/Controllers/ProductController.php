<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function product()
    {
        $product=product::with('brand_data')->paginate(5);
            return view('backend.pages.product',compact('product'));
    }
     
    public function add_product()
    {
        $brand=Brand::all();
        $category=Category::all();
        return view('backend.pages.add_product',compact('brand','category'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        product::create([
            // clm name=>$request->inpt field
            'name'=>$request->productname,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,  
            'quantity'=>$request->quantity,    
        ]);
        return to_route('product');
        
          
    }

    public function report()
    {
        return view('backend.pages.productreport');
    }
      public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        
        $from=$request->from_date;
        $to=$request->to_date;

        $products=Product::whereBetween('created_at', [$from , $to])->get();
        // dd($products);
        return view('backend.pages.productreport',compact('products'));

    }
}
