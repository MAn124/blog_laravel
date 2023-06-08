<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {

        // if(Auth::check()) {
        //     return redirect()->route('welcome');
        // }else {
            return view('auth.login');
        // }
    }
    public function postlogin(LoginRequest $request) {
      
        $email = $request->input('email');
        $password = $request->input('password');
       
        $user = Auth::attempt(['email' => $email, 'password' => $password]);
       
     if($user && Auth::user()->level == 1){
        return redirect()->route('welcome');
     } else {
        return redirect()->route('login');
     }
       
    }
    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('auth.login');
    }
   
    public function register() {
        return view('auth.register');
    }
    
    public function registering(RegisterRequest $request) {
        $passowrd = Hash::make($request->password);
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'level'=> $request->level,
            'password'=> $passowrd,
        ]);
        return redirect()->route('login');
    }
}
