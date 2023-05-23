<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


Route::get('/login', [AuthController::class, 'login']);

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/auth/redirect/{provider}', function ($provider) {
    return  Socialite::driver('$provider')->redirect();
})->name('auth.redirect');
 
Route::get('/auth/callback/{provider}', function ($provider) {
    $user = Socialite::driver('$provider')->user();

})->name('auth.callback');