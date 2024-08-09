<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\UserController::class, 'home_page'])->name('/login');
Route::get('/register', [App\Http\Controllers\UserController::class, 'register_new']);
Route::get('/explore', [App\Http\Controllers\UserController::class, 'explore']);
Route::get('/user-login', [App\Http\Controllers\UserController::class, 'login']);
Route::post('/users', [App\Http\Controllers\UserController::class, 'store_users']);
Route::post('/authenticate', [App\Http\Controllers\UserController::class, 'authentication']);
Route::get('/business-dashboard', [App\Http\Controllers\UserController::class, 'business_dashboard']);
