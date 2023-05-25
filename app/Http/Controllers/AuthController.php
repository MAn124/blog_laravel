<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login() {

        if(Auth::check()) {
            return redirect()->route('welcome');
        }else {
            return view('auth.login');
        }
    }
    public function postlogin(LoginRequest $request) {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level'=>1,
            'status'=>1,
        ];
        if(Auth::attempt($login)) {
            return redirect()->route('welcome');
        } else {
            return redirect()->back()-with('status', 'Email or password incorrect');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');
    }
   
    public function register() {
        return view('auth.register');
    }
 
}
