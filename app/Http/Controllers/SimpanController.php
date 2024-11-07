<?php

// app/Http/Controllers/SimpanController.php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Simpan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SimpanController extends Controller
{


 
    public function simpanResep($id_resep)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login'); 
        }

        $existingSimpan = Simpan::where('id_user', $user->id)
            ->where('id_resep', $id_resep)
            ->first();

        if (!$existingSimpan) {
            Simpan::create([
                'id_user' => $user->id,
                'id_resep' => $id_resep,
            ]);
        }

        return redirect()->route('posts.Viewfavorit');
    }

    public function index()
    {
        $simpans = Simpan::where('id_user', auth()->id())
            ->with('resep')
            ->get();

        return view('posts.favorit', compact('simpans'));
    }

    public function detailResep($id_resep)
    {

        $resep = Resep::all();     // dd($resep);

        return view('posts.detail', compact('resep'));
    }

    
}
