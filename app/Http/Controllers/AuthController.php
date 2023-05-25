<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {

        return view('auth.login');
    }
   
    public function register() {
        return view('auth.register');
    }
    
    public function registering(Request $request) {
        $password =  Hash::make($request->password);
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => $password,

        ]);

        return redirect()->route('login');
    }
}
