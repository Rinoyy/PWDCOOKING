<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    function register(){
        return view('login.register');
    }

    function store(Request $request){

        $data = DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>Bcrypt($request->input('password'))
        ]);

        return view('login.login');
    }
}
