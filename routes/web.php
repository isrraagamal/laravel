<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product\ProductsController;
use App\Http\Controllers\product\ProductDetailsController;

Route::get('/', function () {
    return view('welcome');
});

//MiddleWare (filter who can access and who can not access)
Route::middleware('verified')->group(function(){
    Route::get('product/products', [ProductsController::class, 'index'])->name('product.products');
    Route::get('product/product-details', [productDetailsController::class, 'index'])->name('product.product-details');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
