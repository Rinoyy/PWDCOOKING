<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('posts.landingpage');
    }
    public function dashboard(){
        return view('posts.dashboard');
    }
    public function resep(){
        return view('posts.resep');
    }


}
