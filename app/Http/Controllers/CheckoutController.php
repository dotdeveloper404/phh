<?php

namespace App\Http\Controllers;

use App\Models\{Order, OrderItem, Product};
use Illuminate\Http\Request;
use Cart;
use Exception;

class CheckoutController extends Controller
{

    public function index()
    {
        $cart = Cart::getContent();
        if($cart->isEmpty()) {
            return redirect()->route('cart.list')->with('error', 'Add products to your cart first.');
        }
        $products = Product::all();
        $cartItems = $cart->all();
        return view('checkout', compact('cartItems','products'));
    }

    public function doCheckout(Request $request) {
        try {
            $cart = Cart::getContent()->all();
            $user = $request->user();
    
            $order = Order::create([
                'user_id' => $user->id,
                'total' => Cart::getTotal(),
                'code' => substr(md5(time()), 0, 6)
            ]);
    
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'name' => $item->name,
                    'price' => $item->price,
                    'image' => $item->attributes->image ,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->getPriceSum()
                ]);
            }

            Cart::clear();
    
            return redirect()->route('home.index')->with('order_placed', [
                'success' => true,
                'message' => 'Your order has been placed.',
                'code' => $order->code
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('home.index')->with('order_placed', [
                'success' => false,
                'message' => 'Something went wrong!!',
                'dev_msg' => $th->getMessage()
            ]);
        }
    }
}
