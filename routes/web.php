<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/category', [ProductController::class, 'index'])->name('category.index');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
