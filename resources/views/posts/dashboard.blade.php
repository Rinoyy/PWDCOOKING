@extends('layout.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')    
    <div class="container-fluid">
        <div class="super d-flex flex-column">
            <div class="col-10 col-md-10 content">
                <div class="main-content-dash Muncul">
                    <div class="main-halo pt-5">
                        <img src="{{ asset('img/1.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>

        <div class="kategori-sec d-flex flex-row gap-5 mt-5">
            @for ($i = 0; $i < 8; $i++)
                <button class="kategori">Kategori</button>
            @endfor
        </div>  

        <div class="Menu gap-2" id="data-container">
            @foreach ($data as $item)
                <div class="card-menu">
                    <div class="img-card">
                        <img src="{{ asset('img/pizza.png') }}" alt="Pizza Image">
                    </div>
                    <div class="body-card">
                        <div class="card-title">
                            <h6>{{ $item->judul }}</h6>
                        </div>
                        <div class="kalori">120</div>
                        <div class="jenis d-flex justify-content-around">
                            <div class="left">
                                <p>{{ $item->waktu }}</p>
                            </div>
                            <div class="rig">
                                <p>Mudah</p>
                            </div>
                        </div>
                        <div class="love d-flex justify-content-around">
                            <div class="left">
                                <form action="{{ route('posts.favorit', ['id_resep' => $item->id_resep]) }}" method="POST">
                                    @csrf
                                    <button type="submit">Simpan Resep</button>
                                </form>
                            </div>
                            <div class="rig">
                                <a href="{{ route('create.view', ['id_resep' => $item->id_resep]) }}">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
