<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/favorit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12 navbar p-2 d-flex justify-content-center">
            <div class="d-flex justify-content-center align-items-center gap-4">
                <div class="col-md-2 d-flex justify-content-center">
                    <i class="bi bi-list-task" style="font-size: 30px" id="klik"></i>
                </div>
                <form action="" method="POST" class="d-flex justify-content-between">
                    @csrf
                    <div class="col-md-auto d-flex justify-content-center">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-primary ms-2">Kirim</button>
                </form>
                <div class="col-md-2 d-flex justify-content-center">
                    <i class="bi bi-bell-fill" style="font-size: 30px"></i>
                </div>
            </div>
        </div>
    </div>    
    <div class="row d-flex flex-row">
        <div class="col-2 col-md-2 col-sm-2 sidebar d-flex justify-content-center">
            <div class="side-list d-flex flex-column gap-5 pt-5">
                <div>
                    <i class="bi bi-heart-fill" style="color: orange"></i>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </div>
                <div>
                    <i class="bi bi-heart-fill" style="color: orange"></i>
                    <a href="{{ route('posts.Viewfavorit') }}">Favorite</a>
                </div>
                <div>
                    <i class="bi bi-book-half" style="color: orange"></i>

                    <a href="">Recipe</a>
                </div>
                
                <div>
                    <i class="bi bi-plus-square-fill bg-orange" style="color: orange"></i>

                    <a href="{{ route('create.create') }}">Create</a>
                </div>
                <div>
                    <i class="bi bi-person-circle" style="color: orange"></i>

                    <a href="{{ route('posts.akun') }}">Akun</a>
                </div>
                <div>
                    <i class="bi bi-person-circle" style="color: orange"></i>
                    <a href="{{ route('logout') }}">Sign Out</a>
                </div>
            </div>
        </div>
