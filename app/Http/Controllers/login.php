<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public function login() {
        return view('auth.login', [
            "title" => "Login"
            ]);
    }

    public function auth(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
        return redirect('/');
        }
        return back()->with('loginError', '');
    } 

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
