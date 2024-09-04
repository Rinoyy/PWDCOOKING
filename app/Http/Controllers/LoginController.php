<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('posts.login');
    }
    public function register()
    {
        return view('posts.register');
    }
}
