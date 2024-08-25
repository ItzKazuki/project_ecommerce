<?php

use App\Http\Controllers\Admin\ProductsController as AdminProductsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DiscountsController;

// Route::get('/', [ProductsController::class, 'index']);
Route::get('/', function() {
    return view('index');
});

Route::get('/dashboard', [ProductsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/products/create', [AdminProductsController::class, 'create'])->middleware(['auth', 'verified'])->name('product.create');
Route::post('/products/create', [AdminProductsController::class, 'store'])->middleware(['auth', 'verified'])->name('product.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
Route::get('/discounts', [DiscountsController::class, 'index'])->name('discounts');

require __DIR__.'/auth.php';
