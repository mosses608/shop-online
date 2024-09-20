<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\UserController::class, 'home_page'])->name('login');
Route::get('/register', [App\Http\Controllers\UserController::class, 'register_new']);
Route::get('/explore', [App\Http\Controllers\UserController::class, 'explore']);
Route::get('/user-login', [App\Http\Controllers\UserController::class, 'login']);
Route::post('/users', [App\Http\Controllers\UserController::class, 'store_users']);
Route::post('/authenticate', [App\Http\Controllers\UserController::class, 'authentication']);
Route::get('/business-dashboard', [App\Http\Controllers\UserController::class, 'business_dashboard'])->middleware('auth');
Route::get('/post-product', [App\Http\Controllers\UserController::class, 'post_product'])->middleware('auth');
Route::post('/auth/invalidate', [App\Http\Controllers\UserController::class, 'auth_logout'])->middleware('auth');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store_products'])->name('products')->middleware('auth');
Route::get('/explore-single/{allproduct}', [App\Http\Controllers\ProductController::class, 'single_product']);
Route::post('/carts', [App\Http\Controllers\ProductController::class, 'store_carts']);
Route::get('/my-carts', [App\Http\Controllers\ProductController::class, 'carts_page']);
Route::post('/comments', [App\Http\Controllers\ProductController::class, 'post_comments']);
Route::put('/edit/discount/{product}', [App\Http\Controllers\ProductController::class, 'edit_discount'])->middleware('auth');
Route::delete('/cart-delete/{mycart}', [App\Http\Controllers\ProductController::class, 'delete_cart']);

//STRIPE INTEGRATION
Route::post('/stripe/post', [App\Http\Controllers\StripeController::class, 'stripePost'])->name('stripe.post');

//PAYPAL INTEGRATION
Route::post('/paypal-checkout', [App\Http\Controllers\PaypalController::class, 'paypal_pay']);
Route::get('/success', [App\Http\Controllers\PaypalController::class, 'success']);
Route::get('/error', [App\Http\Controllers\PaypalController::class, 'error']);