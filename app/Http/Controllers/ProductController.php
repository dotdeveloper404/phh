<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    public function productList()
    {
        $products =  Product::all();
        return view('products',compact('products'));
    }

    public function index() {
        return view('dashboard.product.index', [
            'products' => Product::orderByDesc('created_at')->get() ?? null
        ]);
    }

    public function create() {
        return view('dashboard.product.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'numeric', 'min:1'],
            'image' => ['image'],
            'description' => ['string', 'max:50']
        ]);

        if($request->hasFile('image')) {
            $file = $this->uploadFile($request->file('image'), 'product');
            $data = array_merge($data, ['image' => $file]);
        }

        $product = Product::create($data);
        return redirect()->route('product.index');
    }

    public function edit(Product $product) {
        return view('dashboard.product.create', [
            'product' => $product
        ]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'numeric', 'min:1'],
            'image' => ['image'],
            'description' => ['string', 'max:50']
        ]);

        if($request->hasFile('image')) {
            $file = $this->uploadFile($request->file('image'), 'product');
            $data = array_merge($data, ['image' => $file]);
        }

        $product->update($data);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product) {
        try {
            $product->delete();
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        return response()->json([
            'success' => true
        ]);
    }
}
