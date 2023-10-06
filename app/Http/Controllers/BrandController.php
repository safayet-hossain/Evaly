<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function Brand()
    {

        $Brand=Brand::paginate(5);
        return view('backend.pages.brand',compact('Brand'));
    }

    public function add_brand()

    {
        return view('backend.pages.add_brand');
        return to_route('brand');
    }

    public function store(Request $request){
        //dd($request->all());
        Brand::create([
            // clm name=>$request->inpt field
            'Brand_name'=>$request->Brand_name,
            'Product_name'=>$request->Product_name,
            'Price'=>$request->Price,
            'Quantity'=>$request->Quantity


        ]);

        Toastr::success('Added successfully');
        return to_route('brand')->with('msg', 'success.');

}
    public function edit($id)

    {
        $brand=Brand::find($id);
        return view('backend.pages.brand_edit',compact('brand'));

    }
    public function update(Request $request,$id)

    {


        $request->validate([
            'Brand_name'=>'required',
            'Product_name'=>'required',
            'Price'=>'required',
            'Quantity'=>'required'
        ]);
        // dd($request->all);


        $brand=Brand::findorfail($id);
        // dd($brand);
        $brand->update([
            'Brand_name'=>$request->Brand_name,
            'Product_name'=>$request->Product_name,
            'Price'=>$request->Price,
            'Quantity'=>$request->Quantity

        ]);
        Toastr::info('Edited successfully done');
        return to_route('brand');

    }
    public function view($id)
    {
         $brand=Brand::find($id);
         Toastr::info('viewed');
        return view('backend.pages.brand_view',compact('brand'));

    }
    public function delete($id)
    {
         $brand=Brand::find($id);
        //  dd( $brand);
        $brand->delete();
        Toastr::warning('deleted successfully');
        return to_route('brand');
    }

}
