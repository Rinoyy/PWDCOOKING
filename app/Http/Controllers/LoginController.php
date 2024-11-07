<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    protected $redirectTo = '/tampilLogin';


    public function proses()
    {
        return view('login.login');
    }


    public function tampil(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'ematextil' => 'Email atau password salah.',
            ])->withInput();
        }
    }


    public function register()
    {
        return view('login.register');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return view('posts.landingpage');
    }
}
