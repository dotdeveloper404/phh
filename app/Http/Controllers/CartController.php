<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    

    public function cartList()
    {
        $products = Product::all();
        $cartItems = \Cart::getContent();
        return view('frontend.cart', compact('cartItems','products'));

    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=> $request->quantity,
            'attributes'=>array(
                'image'=>$request->image,
            )
            ]);
        
            session()->flash('success','Product is added to cart');

            return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity'=>[
                    'relative'=>false,
                    'value'=>$request->quantity
                ]
            ]
                );


         session()->flash('success','Item in cart updated');

         return redirect()->route('cart.list');
                
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }


    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

}
