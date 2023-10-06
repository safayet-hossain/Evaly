<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()

{
    $Category=Category::paginate(5);
    return view('backend.pages.category',compact('Category'));
}


public function add_category()

{
    return view('backend.pages.add_category');
}


public function store(Request $request){
    //dd($request->all());
    Category::create([
        // clm name=>$request->inpt field
        'name'=>$request->name,
        'description'=>$request->description


    ]);
    Toastr::success('Catergory Added Successfully');
    return to_route('category');

}
    public function category_view($id)
    {   Toastr::success('Category viewd');
        $Category=Category::find($id);
        return view('backend.pages.category_view',compact('Category'));
    }
    public function category_edit($id)
    {
        $Category=Category::find($id);
        return view('backend.pages.category_edit',compact('Category'));
    }
    public function category_update(Request $request,$id)
    {


        $request->validate([
            'name'=>'required',
            'description'=>'required',

        ]);
        // dd($request->all);


        $Category=Category::findorfail($id);

        $Category->update([
            'name'=>$request->name,
            'description'=>$request->description

        ]);
        Toastr::info('Edited successfully done');
        return to_route('category');

    }
    public function category_delete($id)
    {
        $Category=Category::find($id);
        //  dd( $brand);
        $Category->delete();
        Toastr::warning('deleted successfully');
        return to_route('category');
    }
}
