<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('frontend.layouts.home', compact('categories', 'products'));
    }

    public function clearCart()
    {
        session()->forget('cart');

        return redirect()->route('cart.view');
    }

    public function allProducts()
    {
        $products=Product::paginate(3);
        return view('frontend.layouts.search', compact('products'));
    }

    public function viewCart()
    {
        return view('frontend.layouts.cart');
    }

    public function search(Request $request)
    {
//        dd($request->product);
//        dd(request()->product);


        $products = Product::where('name', 'like', '%' . $request->product . '%')->paginate(3);

        return view('frontend.layouts.search', compact('products'));
    }


    //cart start here
    public function addToCart($id)
    {
        $product = Product::find($id);

        //case 1: if cart empty
        $getCart = session()->get('cart');
        if (empty($getCart)) {
                $newCart = [
                    $product->id => [
                        'id' => $product->id,
                        'name' => $product->name,
                        'quantity' => 1,
                        'price' => $product->price,
                        'subtotal' => $product->price * 1,
                    ]
                ];
                session()->put('cart', $newCart);
            return view('frontend.layouts.cart');
            }

        //step 2 : cart not empty

        if(array_key_exists($id,$getCart)){
           //product exist
            $getCart[$id]['quantity']=$getCart[$id]['quantity']+1;
            $getCart[$id]['subtotal']=$getCart[$id]['quantity'] * $getCart[$id]['price'];
            \session()->put('cart',$getCart);

        }else
        {
            //product not exist

            $getCart[$id]=[
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'subtotal' => $product->price * 1,
            ];

            \session()->put('cart',$getCart);
        }


        return view('frontend.layouts.cart');
    }

}
