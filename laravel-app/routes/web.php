<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// mvc => model - view - controller

// HomeController
// BlogsController

Route::get('/', [HomeController::class,'index']);
Route::get('/index', [HomeController::class,'index']);
Route::get('/contact', [HomeController::class,'contact']);

Route::get('/blogs/{id}', [BlogsController::class,'show']);
Route::get('/blogs', [BlogsController::class,'index']);

