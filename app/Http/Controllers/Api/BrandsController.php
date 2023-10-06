<?php

namespace App\Http\Controllers\Api;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller

{   //all brand
    public function Getbrands()
    {
        $brands=Brand::all();
        return $this->responseWithSuccess(BrandResource::collection($brands),'ALL brand view');
    }
    //single dataa
    public function singleBrand ($id)
    {
        $brands=Brand::find($id);

        // // dd($brands);
        if($brands)
        {

        return $this->responseWithSuccess(BrandResource::make($brands),'Single Brand view');
    }
    else
        {return $this->responseWithError("not found");  }
    }
    //create brands
    public function create_brand(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'Brand_name'=>'required',
            'Product_name'=>'required',
            'Price'=>'required',
            'Quantity'=>'required'

        ]);
        if($validate->fails())
        {
            return response()->json(
                [
                    'success'=>false,
                    'data'=>[],
                    'message'=>$validate->getMessageBag(),
                    'status_code'=>200
                ]);
        }
        $brands=Brand::create([
            'Brand_name'=>$request->Brand_name,
            'Product_name'=>$request->Product_name,
            'Price'=>$request->Price,
            'Quantity'=>$request->Quantity

        ]);

        return response()->json([
            'success'=>true,
            'data'=>$brands,
            'message'=>'brand created successfully',
            'status_code'=>200
        ]);
    }
    public function update_brand(Request $request,$id)
    {
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'Brand_name'=>'required',
            'Product_name'=>'required',
            'Price'=>'required',
            'Quantity'=>'required'

        ]);

        if($validate->fails())
        {
            return $this->responseWithError($validate->getMessageBag());

        }

            $brands=Brand::find($id);
            if($brands){
               $brands->update([
                'Brand_name'=>$request->Brand_name,
                // 'category_id'=>$request->category_id,
                'Product_name'=>$request->Product_name,
                'Price'=>$request->Price,
                'Quantity'=>$request->Quantity,
               ]);
            }
     return $this->responseWithSuccess($brands,"Brand Updated successfully.");
    }

}
