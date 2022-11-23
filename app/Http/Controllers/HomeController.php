<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Order;

class HomeController extends Controller
{

    public function index()
    {
        $deals = Deal::all();
        return view('frontend.index', compact('deals'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function howitworks()
    {
        return view('frontend.how-it-works');
    }

    public function partners()
    {
        return view('frontend.partners');
    }

    public function bestdeals()
    {
        $deals = Deal::all();
        return view('frontend.best-deals', compact('deals'));
    }

    public function my_orders()
    {
        $active_orders = Order::with(['items.deal', 'user', 'restaurant'])->where(['user_id' => auth()->id(), 'status' => 'pending'])->orderByDesc('created_at')->get();
        $past_orders = Order::with(['items.deal', 'user', 'restaurant'])->where('user_id', auth()->id())->where('status', '!=', 'pending')->orderByDesc('created_at')->get();
        return view('frontend.my-orders', compact('active_orders', 'past_orders'));
    }
}


