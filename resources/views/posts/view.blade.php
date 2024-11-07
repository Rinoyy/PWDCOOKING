@extends('layout.app')

@section('styles')   
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
@endsection

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-4 left offset-md-2 d-flex justify-content-center">
            <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/06/manfaat-sayur-pakcoy-untuk-kesehatan.jpg" alt="Manfaat Sayur Pakcoy">
        </div>
        <div class="col-md-4 right d-flex flex-column">
            <div class="title">
                @if($data)
                    <h4>{{ $data->deksripsi }}</h4>
                @else
                    <p>Data tidak ditemukan</p>
                @endif 
            </div>
            <div class="deks">
                <span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nihil consequatur harum! Sapiente laborum, illum pris quae quidem dignissimos amet reprehenderit modi tenetur omnis ipsam!
                </span>
            </div>
            <div class="action d-flex flex-row justify-content-between">
                <div class="left">
                    <span>Mudah</span>
                    <span>2 jam</span>
                </div>
                <div class="right">
                    <i class="bi bi-heart-fill" style="color: red"></i>
                </div>  
            </div>
            <div class="sosial d-flex flex-row justify-content-between">
                <div class="left d-flex justify-content-between">
                    <span class="name">Budi</span>
                    <span class="tanggal">12 Oktober 2024</span>
                </div>
                <div class="right">
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-heart-fill"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center ">
        <div class="col-md-10 mt-3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed voluptate at vitae nostrum nemo libero, quos sit odit quod earum possimus quo consectetur ex, iure, velit veniam facilis iusto! Laudantium? sit amet consectetur adipisicing elit. Beatae doloribus eos voluptas obcaecati porro consectetur, reprehenderit voluptatum ipsa impedit quo? Error veniam voluptatem rem pariatur laboriosam, animi dolore! Laboriosam, quam.
            </p>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-10 Judul">
            <h4>Cara Membuat Bobor Bayam Agar Tidak Pahit</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad numquam dignissimos, tenetur recusandae voluptates blanditiis maxime consectetur et id eum.</p>
        </div>
    </div>

    <div class="Step mt-2">
        <div class="row">
            <div class="isi d-flex flex-row">
                <div class="left">
                    <ul>
                        @foreach ($pecah as $item)
                            <li>{{ $loop->iteration }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="right">
                    <ul>
                        @foreach ($pecah as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bahan d-flex flex-row justify-content-center gap-4 ">
        <div class="leftt col-md-4">
            <div class="title-bahan">
                <h5 class="pb-3">Bahan dan bumbu bobor bayam:</h5>
            </div>
            <div class="isi">
                @foreach ($isi_bahan_bahan as $item)
                    <strong>{{ $loop->iteration }}. </strong>{{ $item }}<br>
                @endforeach
            </div>
        </div>

        <div class="right col-md-5 left">
            <div class="title-bahan-right">
                <h5 class="pb-3">Cara membuat</h5>
            </div>
            <div class="isi">
                @foreach ($cara_membuat as $item)
                    <strong>{{ $loop->iteration }}. </strong>{{ $item }}<br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
