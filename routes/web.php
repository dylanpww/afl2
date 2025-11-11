<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');

Route::get('/aboutUs', [RatingController::class, 'index'])->name('rating.index');
Route::get('/category', [ProductController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/users/edit/{id}', [AdminController::class, 'editUser'])->name('admin.editUser');
    Route::put('/admin/users/update/{id}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
    Route::delete('/admin/users/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::post('/admin/users/update/{id}', [AdminController::class, 'updateUser'])->name('admin.updateUser');

    Route::get('/addAndEditProduct', [ProductController::class, 'showAllProduct'])->name('product.showAllProduct');
    Route::get('/formAddProduct', [ProductController::class, 'create']);
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/addAndEditCategory', [CategoryController::class, 'showAllCategory'])->name('category.showAllCategory');
    Route::get('/formAddCategory', [CategoryController::class, 'create']);
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/rating', [RatingController::class, 'showAllRating'])->name('rating.showAllRating');
    Route::get('/formAddRating', [RatingController::class, 'create'])->name('rating.create');
    Route::post('/rating/store', [RatingController::class, 'store'])->name('rating.store');
    Route::get('/rating/{id}/edit', [RatingController::class, 'edit'])->name('rating.edit');
    Route::put('/rating/{id}', [RatingController::class, 'update'])->name('rating.update');
    Route::delete('/rating/{id}', [RatingController::class, 'destroy'])->name('rating.destroy');
});

require __DIR__ . '/auth.php';
