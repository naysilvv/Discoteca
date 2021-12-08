<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\MarketController;

//Post controller

Route::get('/', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);

Route::post('/', [PostController::class, 'store']);

Route::get('/post/{id}', [PostController::class, 'show']);

//Market Controller

Route::get('/market', [MarketController::class, 'index']);

Route::get('/market/create', [MarketController::class, 'create'])->middleware('auth');

Route::post('/market', [MarketController::class, 'store']);

Route::get('/market/{id}', [MarketController::class, 'show']);

Route::get('/dashboard', [MarketController::class, 'dashboard'])->middleware('auth');

Route::delete('/market/{id}', [MarketController::class, 'destroy'])->middleware('auth');

Route::get('/market/{id}', [MarketController::class, 'edit'])->middleware('auth');

Route::put('/market/update/{id}', [MarketController::class, 'update'])->middleware('auth');