<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/projects', [PageController::class, 'projects']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/edit/{id}', [PostController::class, 'edit']);

Route::post('/posts/edit/{id}', [PostController::class, 'update']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts/delete/{id}', [PostController::class, 'destroy']);
