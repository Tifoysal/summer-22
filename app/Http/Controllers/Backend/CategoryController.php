<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
       $category_data=Category::paginate(10);
        return view('backend.pages.category-list',compact('category_data'));
    }

    public function store(Request $request){
//         dd($request->all());
        Category::create([
            // column name => blade input field name
            'name'=> $request->category_name,
            'description' =>$request->description,
        ]);
        return redirect()->route('category.list');
    }

    public function create()
    {
        return view('backend.pages.category-create');
    }

    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect()->back();

//        Category::where('id',$id)->first();
    }

    public function view($id)
    {
        $category=Category::find($id);
        return view('backend.pages.category.view',compact('category'));
    }

    public function edit($category_id)
    {
       $category=Category::find($category_id);

       return view('backend.pages.category.edit',compact('category'));
    }

    public function update(Request $request,$category_id)
    {
           $category=Category::find($category_id);
           $category->update([
               'status'=>$request->status,
               'name'=> $request->name,
               'description' =>$request->description,
           ]);
//
//        Category::find($category_id)->update([
//            'name'=> $request->name,
//            'status'=>$request->status,
//            'description' =>$request->description,
//        ]);

           return redirect()->route('category.list');
    }

}
