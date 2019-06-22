<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('shoppingcart/products', compact('products'));
    }
    public function cart()
    {
        return view('shoppingcart/cart');
    }
    public function addToCart($id)
    {
        $products = Product::find($id);
        if(!$product){
            abort(404);
        }
        $cart = session()->get('cart');

        if(!cart) {
            $cart = [
                $id => [
                    'name' => $product->name,
                    'quantily' => 1,
                    'price' => $product->price,
                    'photo' => $product->photo
                ]
            ];

            session()->put('cart',$cart);
            return redirect()->back()->with('sucess','Product added to cart');
        }
        if(asset($cart[$id])){
            $cart[$id]['quantily']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product added to cart success');
        }
    }
}
