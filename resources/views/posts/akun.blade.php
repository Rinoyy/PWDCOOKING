@extends('layout.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/akun.css') }}">
</head>

@section('content')
<div class="container mainAkun" >
    <h2 class="">Data Resep</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Resep</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Level</th>
                <th>Waktu</th>
                <th>Sub Judul</th>
                <th>Isi Bahan Bahan</th>
                <th>Cara Membuat</th>
                <th>ID Kategori</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reseps as $resep)
                <tr>
                    <td>{{ $resep->id_resep }}</td>
                    <td>{{ $resep->judul }}</td>
                    <td>{{ $resep->deksripsi ?? 'Tidak ada deskripsi' }}</td>
                    <td>{{ $resep->Level ?? 'Tidak ada level' }}</td>
                    <td>{{ $resep->waktu }}</td>
                    <td>{{ $resep->Sub_judul }}</td>
                    <td>{{ $resep->isi_bahan_bahan }}</td>
                    <td>{{ $resep->cara_membuat }}</td>
                    <td>{{ $resep->Id_kategori }}</td>
                    <td>
                        @if($resep->Img)
                            <img src="{{ asset('images/' . $resep->Img) }}" alt="Gambar Resep" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ Route('edit', ['id_resep' => $resep->id_resep]) }}">edit</a>
                        <a href="{{ Route('hapus', ['id_resep' => $resep->id_resep]) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
