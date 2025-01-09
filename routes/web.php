<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('movies', MovieController::class);
    Route::resource('genres', GenreController::class)->except(['show']);
    Route::resource('casts', CastController::class);
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'showLoginForm')->name('login')->middleware('guest');
    Route::post('/auth/login', 'login');
    Route::get('/auth/logout', 'logout');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('movie.index');
    Route::get('/movies', 'all')->name('movie.all');
    Route::get('/detail/{id}', 'show');
    Route::get('/search', 'search')->name('movie.search');
});
