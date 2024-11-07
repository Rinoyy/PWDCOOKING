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

        $cara_membuat = implode('|', $request->input('cara_membuat'));
        $isi_bahan_bahan = implode('|', $request->input('isi_bahan_bahan'));

        $data = DB::table('Resep')->insert([
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


      

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show($id_resep)
    {
        $data = DB::table('resep')->where('id_resep', $id_resep)->first();
        
        if ($data->isi_bahan_bahan) {
            $pecah = explode('|', $data->isi_bahan_bahan);
        } 
    
        if ($data->cara_membuat) {
            $cara_membuat = explode('|', $data->cara_membuat);
        } 
        if ($data->	isi_bahan_bahan) {
            $isi_bahan_bahan = explode('|', $data->	isi_bahan_bahan);
        } 
        return view('posts.view', [
            'data' => $data,
            'pecah' => $pecah,
            'cara_membuat' => $cara_membuat,
            'isi_bahan_bahan' => $isi_bahan_bahan
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
