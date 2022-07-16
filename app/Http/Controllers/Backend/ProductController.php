<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products=Product::with('category')->OrderBy('id','desc')->paginate(5);
//        dd($products);
        return view('backend.pages.products',compact('products'));
    }


    public function form()
    {
        $categories=Category::all();
//        dd($categories);
        return view('backend.pages.product.form',compact('categories'));
    }



    public function store(Request $request){

       $request->validate([
           'product_name'=>'required',
           'product_price'=>'required|numeric|min:1|max:10',
           'product_qty'=>'required|integer',
           'category'=>'required|integer',
       ]);

        Product::create([
            // migration table -column name => input field name
            'name'=>$request->product_name,
            'category_id'=>$request->category,
            'price'=>$request->product_price,
            'quantity'=>$request->product_qty,
            'description'=>$request->product_desc,
        ]);


        return redirect()->route('product.list');
    }
}
