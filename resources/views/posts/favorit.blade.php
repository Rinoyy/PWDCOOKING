<h1>Resep yang Disimpan</h1>

<!-- Menampilkan flash message -->
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

<!-- Menampilkan daftar card untuk resep yang disimpan -->
@foreach ($simpans as $simpan)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $simpan->resep->judul }}</h5>
            <p class="card-text">{{ $simpan->resep->deskripsi }}</p>
            <a href="{{ route('posts.detail', $simpan->resep->id_resep) }}" class="btn btn-primary">Lihat Detail</a>
        </div>
    </div>
@endforeach
