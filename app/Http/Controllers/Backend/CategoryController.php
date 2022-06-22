<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $category =Category::all();
        // dd($data);
        return view('backend.pages.category-list',compact('category'));
    }
    public function form(){
        return view('backend.pages.categoryCreate');
    }
    public function store(Request $request){
        // dd($request->all());
        Category::create([
            // column name => blade input field name
            'name'=> $request->name,
            'description' =>$request->description,
        ]);
        return view('backend.pages.category-list');
    }
}
