<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Protected Routes
Route::middleware('checkauth')->group(function () {
    Route::get('/', function () { return view('home'); });
    Route::get('/routine', function () { return view('routine'); });
    Route::get('/attendance', function () { return view('attendance'); });
});