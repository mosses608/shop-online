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
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store_products'])->middleware('auth');
Route::get('/explore-single/{allproduct}', [App\Http\Controllers\ProductController::class, 'single_product']);
Route::post('/carts', [App\Http\Controllers\ProductController::class, 'store_carts']);
route::get('/my-carts', [App\Http\Controllers\ProductController::class, 'carts_page']);
Route::post('/comments', [App\Http\Controllers\ProductController::class, 'post_comments']);