<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\UserController::class, 'home_page'])->name('/login');
