<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/addAndEditProduct', [ProductController::class, 'showAllProduct'])
    ->name('product.showAllProduct');
// ->middleware(['auth', 'admin']);

Route::get('/aboutUs', [RatingController::class, 'index'])
    ->name('rating.index');


Route::get('/category', [ProductController::class, 'index'])
    ->name('category.index');

Route::get('/category/{id}', [CategoryController::class, 'show'])
    ->name('category.show');

Route::get('/product/{id}', action: [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])
    ->name('product.edit')
    ->middleware(['auth', 'admin']);

Route::delete('/product/{id}', [ProductController::class, 'destroy'])
    ->name('product.destroy')
    ->middleware(['auth', 'admin']);

Route::put('/product/{id}', [ProductController::class, 'update'])
    ->name('product.update')
    ->middleware(['auth', 'admin']);

Route::get('/formAddProduct', [ProductController::class, 'create'])
    ->middleware(['auth', 'admin']);

Route::post('/product', [ProductController::class, 'store'])
    ->name('product.store');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');






require __DIR__ . '/auth.php';
