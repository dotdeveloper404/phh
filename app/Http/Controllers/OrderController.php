<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with(['items.deal', 'user'])->get()->map(function($o) {
            return auth()->user()->hasRole('Admin') ? $o : ($o->restaurant()->id == auth()->id() ? $o : null);
        })->filter();



        return view('dashboard.orders.orders', [
            'orders' =>  $orders
        ]);
    }
}
