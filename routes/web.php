<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', PostController::class);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/index', [PostController::class, 'index']);
