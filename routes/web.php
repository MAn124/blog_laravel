<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'registering'])->name('registering');

// Route::post('/login', [AuthController::class,'logout'])->name('logout');
Route::get('/', function () {
    return view('layout.master');
})->name('welcome');

Route::prefix('/admin')->group(function () {
    
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class,'index'])->name('index');
        Route::get('/{user}', [UserController::class,'show'])->name('show');
    });
});
