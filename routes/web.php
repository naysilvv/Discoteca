<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/discos', [PostController::class, 'discoSearch']);

Route::get('/discoview/{id?}', [PostController::class, 'discoView']);