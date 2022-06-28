<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        return view('backend.pages.category-list');
    }

    public function create()
    {
        return view('backend.pages.category-create');
    }

    public function store(Request $request)
    {

//        dd($request->all());
        Category::create([
            'name'=>$request->category_name,
            'description'=>$request->description
        ]);

        return redirect()->back();

    }
}
