<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login() {
        return view("auth.Login");
    }

    public function signin() {
        return view("auth.Signin");
    }
}
