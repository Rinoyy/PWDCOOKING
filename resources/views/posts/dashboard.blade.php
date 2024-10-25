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
                            <img src="{{ asset('img/1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="kategori-sec d-flex flex-row gap-5 mt-5">
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
        <button class="kategori" class="kategori">Kategori</button>
    </div>  
   
    <div class="Menu gap-2">
        {{-- <a href="{{ route('create.view') }}"> --}}
        {{-- @for($i=0;  $i<11; $i++) --}}
        @foreach ($data as $item)
            
            <div class="card-menu">
                <div class="img-card">
                    <img src="{{ asset('img/pizza.png') }}" alt="">
                </div>
                <div class="body-card">
                    <div class="card-title">
                        <h5>{{ $item->judul }}</h5>
                    </div>
                    <div class="kalori">
                        120
                    </div>
                    <div class="jenis">
                        <div class="left">
                            Lorem, ipsum dolor.
                        </div>
                        <div class="rig">
                            Lorem, ipsum dolor.
                        </div>
                    </div>
                    <div class="love">
                        <div class="left">
                            Lorem, ipsum dolor.
                        </div>
                        <div class="rig">
                            <a href="{{ route('create.view', ['Id_resep' => $item->Id_resep]) }}">Detail</a>
                        </div>
                    
                    </div>
                </div>
            </div>
        {{-- </a> --}}
        @endforeach
        {{-- @endfor --}}
    </div>
</div>
@endsection
