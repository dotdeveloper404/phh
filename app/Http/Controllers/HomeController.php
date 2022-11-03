<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $products = Product::all();
        return view('frontend.index', compact('products'));
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
        $products = Product::all();
        return view('frontend.best-deals', compact('products'));
    }
}
