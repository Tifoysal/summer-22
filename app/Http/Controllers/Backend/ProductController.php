<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view(){
        return view('backend.pages.products');
    }
    public function form(){
        return view('backend.pages.product.form');
    }
    public function store(Request $request){
        // dd($request->all());
        Product::create([
            // migration table name => input fielf name
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_qty'=>$request->product_qty,
            'product_weight'=>$request->product_weight,
            'product_desc'=>$request->product_desc,
        ]);
        return redirect()->back();
    }
}
