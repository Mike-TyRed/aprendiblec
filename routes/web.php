<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Vista simple principal del proyecto
Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');

Route::resource('posts', PostController::class);

Route::view('about', 'about')->name('about');

Route::view('login', 'auth.login')->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);