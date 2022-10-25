<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
 
//Route::get('/dashboard', function () {
//    return view('index');
//});
 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);