<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AuthController;
use App\Models\User;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'registering'])->name('registering');

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/auth/redirect/{provider}', function ($provider) {
    return  Socialite::driver($provider)->redirect();
})->name('auth.redirect');
 
Route::get('/auth/callback/{provider}', function ($provider) {
    $data = Socialite::driver($provider)->user();
    $user = User::query()->where('email', $data->getEmail())->first();
    if(is_null($user)) {
        
    }

})->name('auth.callback');