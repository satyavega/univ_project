<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/pages', \App\Http\Controllers\PagesController::class);
Route::resource('/posts', \App\Http\Controllers\PostController::class);
