<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    
    public function viewCart () {
        $cart = session()->get('cart',[]);
        return view('cart',compact('cart'));
    }

    public function addToCart(Request $request) {
        try {
            $product = Product::find($request->product_id);
            if(! $product) {
                return redirect()->back()->with('error','Product not found');
                
            }
            $cart = session()->get('cart',[]);
            if(isset($cart[$product->id])){
                $cart[$product->id]['price'] += $request->price;
            } else {
                $cart[$product->id] = [
                    'product_id' => $request->product_id,
                    'items' => 1,
                    'price' => $request->price,
                ];
            }
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Product added to the cart successfully !');
        } catch (\Exception $e){
            dd($e);
        }
    }

    //  public function showCart() {
    //     $cart = session()->get('cart',[]);
    //     dd($cart);
    //     return view('cart',compact('cart'));
    //  }
}
