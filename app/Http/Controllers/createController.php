<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class createController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('resep')->get();

        return view('posts.view', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $data_isi = implode('|', $request->input('isi_1'));


        $data = DB::table('resep')->insert([
            "judul" => $request->input('judul'),
            "desripsi_1" => $request->input('deskripsi_1'),
            "id_level" => $request->input('id_level'),
            "waktu" => $request->input('waktu'),
            "desripsi_2" => $request->input('deskripsi_2'),
            "sub_judul" => $request->input('sub_judul'),
            "desripsi_3" => $request->input('deskripsi_3'),
            "isi_1" => $data_isi,
            "judul_bahan" => $request->input('judul_bahan'),
            "isi_bahan" => $request->input('isi_bahan'),
            "judul_cara" => $request->input('judul_cara'),
            "isi_cara" => $request->file('img'),
            "img" => $request->input('judul'),
            "id_kategori" => $request->input('id_kategori')
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show($Id_resep)
    {
        $data = DB::table('resep')->where('id_resep', $Id_resep)->first();
        
        if ($data->isi_1) {
            $pecah = explode('|', $data->isi_1);
        } 
    
        return view('posts.view', [
            'data' => $data,
            'pecah' => $pecah,
        ]);
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
