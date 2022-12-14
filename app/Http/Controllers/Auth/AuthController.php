<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login() {
        if(auth()->check()) {
            return back();
        }

        return view("auth.Login");
    }

    public function signin() {
        if(auth()->check()) {
            return back();
        }
        
        return view("auth.Signin");
    }
}
