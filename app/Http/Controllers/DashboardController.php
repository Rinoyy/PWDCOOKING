<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('posts.landingpage');
    }

    public function dashboard(Request $request)
    {
        $data = DB::table('resep')->get();

        return view('posts.dashboard', [
            'data' => $data
        ]);
    }
}
