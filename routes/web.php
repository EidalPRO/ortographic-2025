<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  [HomeController::class, 'index']);
Route::get('/acerca-de',   [HomeController::class, 'about']);
Route::get('/galeria-de-fotos',   [HomeController::class, 'galeria']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');

Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('auth.redirect');
Route::get('/auth/facebook/callback', [SocialController::class, 'callback'])->name('auth.callback');
Route::get('/auth/google/redirect', [SocialController::class, 'redirectGoogle'])->name('authGoogle.redirect');
Route::get('/auth/google/callback', [SocialController::class, 'callbackGoogle'])->name('authGoogle.callback');
