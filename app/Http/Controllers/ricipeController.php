<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ricipeController extends Controller
{
    public function resep(){
        return view('posts.resep');
    }

}
