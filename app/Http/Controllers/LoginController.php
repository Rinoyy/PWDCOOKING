<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function tampil(){
        return view('login.login');
    }
    public function proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput();
        }
    }
    

    public function register()
    {
        return view('login.register');
    }
}
