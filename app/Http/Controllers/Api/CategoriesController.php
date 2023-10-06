<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function getCategory()
    {
        $category=Category::all();
        return response()->json([
            'success'=>true,
            'data'=> $category,
            'message'=>'All category list',
            'status_code'=>200
        ]);
    }

    public function single_category($id)
    {
        $category=Category::find($id);
        return response()->json([
            'success'=>true,
            'data'=>$category,
            'message'=>'Single category view',
            'status_code'=>200

        ]);
    }

    public function create_category(Request $request)
    {
        $validate=Validator::make($request->all(),
       [
            'name'=>'required',
            'description'=>'required',

        ]);

        if($validate->fails())
            {
                return $this->responseWithError($validate->getMessageBag());
            }

            $category=Category::create([
                // clm name=>$request->inpt field
                'name'=>$request->name,
                'description'=>$request->description,
            ]);

            return $this->responseWithsuccess($category,"category created successfully");
    }
}
