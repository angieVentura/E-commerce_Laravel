<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('products');
});

Route::resource('/products', ProductController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/categories', CategoryController::class);