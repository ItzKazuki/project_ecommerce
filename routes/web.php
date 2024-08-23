<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HelloWorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'index']);

// Route::get('/hello', [HelloWorldController::class, 'index']);

