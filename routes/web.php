<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function() {
    Route::get('', function() {
        return view('dashboard.index');
    })->name('dashboard');

    Route::resource('product', ProductController::class);
    Route::resource('contact',ContactController::class);
});

Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('doCheckout',[CheckoutController::class,'doCheckout'])->name('checkout.do_checkout');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('partners', [HomeController::class, 'partners'])->name('home.partners');
Route::get('how-it-works', [HomeController::class, 'howitworks'])->name('home.howitworks');
Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('best-deals', [HomeController::class, 'bestdeals'])->name('home.bestdeals');
Route::get('about', [HomeController::class, 'about'])->name('home.about');

Route::get('product-list', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


require __DIR__.'/auth.php';
