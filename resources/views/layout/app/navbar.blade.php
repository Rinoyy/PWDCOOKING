<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="main-navbar bg-kuning p-2 fixed-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Navbar Brand and Toggle Button -->
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand fw-bold text-white" href="#">Codas</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Navbar Links -->
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarResep" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Resep
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarResep">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarArticle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Article
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarArticle">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-7 pt-2">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search-heart"></i></button>
                    </form>
                </div>
                <div class="col-md-1 text-end">
                    <div class="dropdown">
                        <a href="#" class="btn btn-primary dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('posts.login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('posts.register') }}">Sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Penutup row -->
        </div> <!-- Penutup container -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2GIU08+lzLYmylpb3DO9lG9PxCz+5m5sVBaa1rv7S0TX75vg2zrA+Qpc1LL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
   
    // Kode JavaScript Anda di sini
    window.addEventListener("scroll", function() {
        var navbar = document.querySelector(".main-navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });


    </script>
</body>
</html>
