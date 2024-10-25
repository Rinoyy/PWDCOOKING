<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12 navbar p-2 d-flex justify-content-center">
            <div class="d-flex justify-content-center align-items-center gap-4">
          
                <form action="" method="POST" class="d-flex justify-content-between">
                    @csrf
                    <div class="col-md-auto d-flex justify-content-center">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-primary ms-2">Kirim</button>
                </form>
                <div class=" d-flex justify-content-center">
                    <i class="bi bi-bell-fill" style="font-size: 30px"></i>
                </div>
                <div class=" d-flex justify-content-center">
                    
                        <a href="{{ Route('tampil') }}"><i class="bi bi-box-arrow-in-right" style="font-size: 24px;"></i></a>
                   
                </div>
            </div>
        </div>
    </div>    


@section('content')
<div class="container-fluid part bg-light" style="height: 800px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center  main-text flex-column">
            <h1 class="text-dark">
                welcome to Codas,
                <span class="auto-type"><br></span>
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicin repudiandae nisi.
            </p>
        </div>
        <div class="col-md-5 main-bg">
            <img src="{{ asset('img/pizza-bg.png') }}" alt="Pizza Background" class="img-fluid" width="562px" style="margin-top: 120px">
        </div>
    </div>
</div>

<div class="container-fluid part part_about">
    <div class="judul text-center">
        <h2 class="text-dark pb-4">About</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="https://i.pinimg.com/564x/1b/08/1e/1b081e82bf58d22896ead9bebecafca8.jpg" alt="About Image" class="img-fluid about">
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloribus laboriosam explicabo illum! Esse, reiciendis, quasi culpa commodi hic beatae architecto nesciunt adipisci aspernatur veniam veritatis eaque dolorem consequuntur possimus.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloribus laboriosam explicabo illum! Esse, reiciendis, quasi culpa commodi hic beatae architecto nesciunt adipisci aspernatur veniam veritatis eaque dolorem consequuntur possimus.</p>
        </div>
        <div class="col-md-3">
            <img src="https://i.pinimg.com/564x/1b/08/1e/1b081e82bf58d22896ead9bebecafca8.jpg" alt="About Image" class="img-fluid about">
        </div>
    </div>
</div>

<div class="container-fluid ungah part_hp bg-light">
    <div class="row d-flex align-items-center justify-content-center pt-10 pb-5">
        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{ asset('img/hp.png') }}" alt="Phone Image" class="img-fluid rotate-3d-animation" width="100px">
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consectetur facilis? Laboriosam quidem corrupti ut aliquam magnam alias corporis quo harum! In temporibus assumenda quod reiciendis quaerat voluptas consequuntur debitis.</p>
        </div>
    </div>
</div>

<div class="container-fluid pt-5 part contributors bg-transparent">
    <div class="content">
        <div class="judul text-center">
            <h2 class="text-dark pb-4 position-relative">Contributors</h2>
        </div>
        <div class="row justify-content-center d-flex flex-wrap gap-4">
            <div class="Menu gap-2">
        
                @for($i=0;  $i<11; $i++)
                    <div class="card-menu">
                        <div class="img-card">
                            <img src="{{ asset('img/pizza.png') }}" alt="">
        
                        </div>
                        <div class="body-card">
                            <div class="card-title">
                                <h5>Lorem ipsum dolor sit amet.</h5>
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
                                    Lorem, ipsum dolor.
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
              
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed(".auto-type", {
        strings: ["To find what you want", "Simple fast and fact", "only in Codas"],
        typeSpeed: 150,
        backSpeed: 100,
        loop: true
    });
</script>



<script>

document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.person1');

        function checkScroll() {
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

                if (isVisible) {
                    card.classList.add('animated-card');
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        checkScroll();
    });


//INI UNTUK JS HP
document.addEventListener('DOMContentLoaded', function() {
    const phoneImage = document.querySelector('.rotate-3d-animation');

    function checkScroll() {
        const rect = phoneImage.getBoundingClientRect();
        const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

        if (isVisible) {
            phoneImage.classList.add('animate-3d');
            window.removeEventListener('scroll', checkScroll);
        }
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll();
});



</script>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3ngdSTzOGrLg0Lr5bYZ9jlbQj66BF8G5i7P6r6yvcfQNXs+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
    $('#klik').click(function () {
        $('.sidebar').toggleClass('transform'); 

        
        $('.main-content').removeClass('Muncul Hilang');

        if ($('.sidebar').hasClass('transform')) {
            $('.main-content').addClass('Hilang');
        } else {
            $('.main-content').addClass('Muncul');
        }
    });
});
</script>
</body>









