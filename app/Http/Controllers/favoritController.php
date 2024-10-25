<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class favoritController extends Controller
{
    public function favorit(){
        return view('posts.favorit');
    }
}
