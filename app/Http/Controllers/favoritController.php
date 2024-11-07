<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class favoritController extends Controller
{
  

    public function akun()
    {
        $reseps = DB::table('resep')->get();
        return view('posts.akun', compact('reseps'));
    }

    public function hapus($id_resep)
    {
        DB::table('Resep')
            ->where('id_resep', $id_resep)
            ->delete();

        return view('posts.akun');
    }

    public function edit($id_resep)
    {
        $edit = DB::table('resep')->where('id_resep', $id_resep)->first();
        // dd($edit);
        return view('posts.edit', [
            'edit' => $edit

        ]);
    }

    public function update(Request $request, $id_resep)
    {
        $cara_membuat = implode('|', $request->input('cara_membuat'));
        $isi_bahan_bahan = implode('|', $request->input('isi_bahan_bahan'));

        DB::table('Resep')
            ->where('id_resep', $id_resep)
            ->update([
                "judul" => $request->input('judul'),
                "deksripsi" => $request->input('deksripsi'),
                "Level" => $request->input('Level'),
                "waktu" => $request->input('waktu'),
                "Sub_judul" => $request->input('Sub_judul'),
                "isi_bahan_bahan" => $isi_bahan_bahan,
                "cara_membuat" => $cara_membuat,
                // "img" => null
                "id_kategori" => $request->input('id_kategori'),
            ]);
        return redirect()->route('posts.akun');
    }
}
