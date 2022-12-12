<?php

namespace App\Http\Controllers;

use App\Events\OrderPlaced;
use Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\{Deal, Order, OrderItem,};

class CheckoutController extends Controller
{

    public function index()
    {

        //test
        $cart = Cart::getContent();
        if ($cart->isEmpty()) {
            return redirect()->route('cart.list')->with('error', 'Add products to your cart first.');
        }
        // $products = Product::all();
        $deals = Deal::all();
        $cartItems = $cart->all();
        return view('frontend.checkout', compact('cartItems', 'deals'));
    }

    public function doCheckout(Request $request)
    {
        try {
            $cart = Cart::getContent();
            $user = $request->user();

            $order = Order::create([
                'user_id' => $user->id,
                'restaurant_id' => $cart->first()->attributes->restaurant_id,
                'total' => Cart::getTotal(),
                'code' => substr(md5(time()), 0, 6)
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'deal_id' => $item->id,
                    'quantity' => $item->quantity,
                    'subtotal' => $item->getPriceSum()
                ]);
            }

            Cart::clear();

            event(new OrderPlaced($order));

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
