<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories=Category::all();
        $products=Product::all();

        return view('frontend.layouts.home',compact('categories','products'));
    }

    public function search(Request $request)
    {
//        dd($request->product);
//        dd(request()->product);


        $products=Product::where('name','like','%'.$request->product.'%')->get();

        return view('frontend.layouts.search',compact('products'));
    }

}
