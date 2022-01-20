<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\MarketController;

//Post controller

Route::get('/', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create'])->middleware('auth');

Route::post('/', [PostController::class, 'store']);

Route::get('/post-dashboard', [PostController::class, 'dashboard'])->middleware('auth');

Route::get('/post/{id}', [PostController::class, 'show']);

Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware('auth');

Route::put('/post/update/{id}', [PostController::class, 'update'])->middleware('auth');

//Market Controller

Route::get('/market', [MarketController::class, 'index']);

Route::get('/market/create', [MarketController::class, 'create'])->middleware('auth');

Route::post('/market', [MarketController::class, 'store']);

Route::get('/market/{id}', [MarketController::class, 'show']);

Route::get('/dashboard', [MarketController::class, 'dashboard'])->middleware('auth');

Route::delete('/market/{id}', [MarketController::class, 'destroy'])->middleware('auth');

Route::get('/market/edit/{id}', [MarketController::class, 'edit'])->middleware('auth');

Route::post('/market/update/{id}', [MarketController::class, 'update'])->middleware('auth');