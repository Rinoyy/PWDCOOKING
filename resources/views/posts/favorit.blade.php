@extends('layout.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Resep yang Disimpan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($simpans as $simpan)
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('img/pizza.png') }}" class="card-img-top" alt="Image" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $simpan->resep->judul }}</h5>
                        <p class="card-text">{{ Str::limit($simpan->resep->deskripsi, 100) }}</p>
                        <a href="{{ route('posts.detail', $simpan->resep->id_resep) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
