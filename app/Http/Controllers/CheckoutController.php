<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $cartItems = \Cart::getContent();
        return view('checkout', compact('cartItems','products'));
    }

    public function doCheckout()
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
