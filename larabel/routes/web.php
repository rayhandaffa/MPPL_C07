<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/login2', function () {
    return view('login');
});

Route::get('/cart2', function () {
    return view('cart2');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/payment-confirmation', function () {
    return view('payment-confirm');
})->name('payment.confirmation');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::post('/order', [OrderController::class, 'addOrder'])->name('order.store');
Route::post('/edit-profile', [UserController::class, 'editProfile'])->name('user.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin page
Route::get('/admin/product', function () {
    return view('admin.product');
})->name('admin.product');

Route::post('/admin/product/store', [ProductController::class, 'addProduct'])->name('product.store');
Route::post('/admin/product/update-status', [ProductController::class, 'editProductStatus'])->name('product.update.status');
Route::post('/admin/product/update', [ProductController::class, 'editProduct'])->name('product.update');
Route::post('/admin/product/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');

Route::get('/admin/order', function () {
    return view('admin.order');
})->name('admin.order');
Route::post('/admin/order/update-status', [OrderController::class, 'editOrderStatus'])->name('order.update.status');
// Route::post('/admin/product/store', [ProductController::class, 'addProduct'])->name('product.store');