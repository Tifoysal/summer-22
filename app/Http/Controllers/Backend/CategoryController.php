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

}
