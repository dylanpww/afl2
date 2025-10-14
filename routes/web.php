<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutUs', [RatingController::class, 'index'])->name('rating.index');


Route::get('/category', [ProductController::class, 'index'])->name('category.index');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{id}', action: [ProductController::class, 'show'])->name('product.show');