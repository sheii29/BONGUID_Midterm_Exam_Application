<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/books', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index']);