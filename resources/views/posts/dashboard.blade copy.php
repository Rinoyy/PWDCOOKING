<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-1">
                <i class="bi bi-list h3"></i>
            </div> --}}
            <div class="sidebar">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            
                <div class="row pt-4 ">
                    <div class="col-md-2 mt-4 d-flex  left  flex-column gap-3">
                        <i class="bi bi-list h3" id="menu"></i>
                        <i class="bi bi-person-circle" style="color: #243407; font-size: 25px;" id="hover-house menu"></i>
                        <i class="bi bi-house" style="color: #243407; font-size: 25px;" id="hover-house"></i>
                        <i class="bi bi-chat-dots-fill h3" id="menu"></i>
                        <i class="bi bi-cookie" style="color: #243407; font-size: 25px;" id="hover-house"></i>
                        <i class="bi bi-heart-fill" style="color: #243407; font-size: 25px;" id="hover-house"></i>
                        <div class="content-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, assumenda?
                        </div>
                    </div>
                    {{-- <span>For logo</span> --}}

                    <div class="col-md-8 collapse " id="sidebarMenu">
                      

                        <div class="sidebar-img">
                            <p>FOR  LOGO</p>
                        </div>
                        <ul class="fw-normal list-unstyled">
                            <li>
                                <div class="d-flex align-items-center mb-2" style="color: purple; font-weight: 600;">
                                    <span style="color: purple; font-weight: 600; margin-left: 5px;">House</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    {{-- <span style="margin-left: 5px;"> --}}
                                        <a href="{{ Route('posts.resep') }}">Resep</a>
                                    {{-- </span> --}}
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <span style="margin-left: 5px;">Info</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <span style="margin-left: 5px;">MY Account</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <span style="margin-left: 5px;">Favorite</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
            
            <div class="col-md-10  p-3 main-content">
                <div class="row">
                    <div class="col-md-12">
                                    <div class="content" id="content">
                                        <div class="row d-flex align-items-center ms-4 header">
                                            <form action="" class="d-flex">
                                                <input type="text" class="form-control me-2 rounded-normal" name="input" placeholder="Ayo cari resep makananmu!!!">
                                                <button type="submit"  class="btn btn-success rounded-normal">Cari</button>
                                                <i class="bi bi-bell-fill h3" style="margin-left: 20px" id="klik"></i>
                                            </form>
                                        </div>
                    
                                        <div class="row main-img">
                                            <div class="col-md-10 d-flex justify-cotent-end img-utama" >
                                                <img src="{{ asset('img/1.png') }}" alt="">
                                            </div>
                                        </div>
                    

                                        {{-- kategori --}}
                                    {{-- <div class="main-kategori">
                                        <div class="row pt-5" style="margin-left: 190px; margin-top: 100px">
                                            <div class="kategori d-flex gap-3 text-center">
                                                <div class="col-md-1 p-2 kategori-item border rounded">
                                                    <span>kue</span>
                                                </div>
                                                <div class="col-md-1 p-2 kategori-item border rounded">
                                                    <span>Instant</span>
                                                </div>
                                                <div class="col-md-1 p-2 kategori-item border rounded">
                                                    <span>Berat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   --}}
                                      
                                        {{-- akhir kategori --}}
                    
                                         <div class="row  d-flex justify-content-center gap-5" style="margin-left: 20px;  margin-top: 100px">
                                            <div class="col-md-2 border rounded p-3">
                                                <div class="icon">
                                                    <i class="bi bi-person-fill h1" style="color: #ec9648"></i>
                                                </div>
                                                <div class="title">
                                                        <span class="fw-bold">The  popular food</span>
                                                </div>
                                                <div class="deksrip">
                                                    <span>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ipsa.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 border rounded p-3">
                                                <div class="icon">
                                                    <i class="bi bi-person-fill h1" style="color: #ec9648"></i>
                                                </div>
                                                <div class="title">
                                                        <span class="fw-bold">The best Chef</span>
                                                </div>
                                                <div class="deksrip">
                                                    <span>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ipsa.
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2 border rounded p-3">
                                                <div class="icon">
                                                    <i class="bi bi-person-fill h1" style="color: #ec9648"></i>
                                                </div>
                                                <div class="title">
                                                        <span class="fw-bold">Master chef</span>
                                                </div>
                                                <div class="deksrip">
                                                    <span>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ipsa.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 border rounded p-3">
                                                <div class="icon">
                                                    <i class="bi bi-person-fill h1" style="color: #ec9648"></i>
                                                </div>
                                                <div class="title">
                                                        <span class="fw-bold"></span>
                                                </div>
                                                <div class="deksrip">
                                                    <span>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ipsa.
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    
                                        <div class="garis  d-flex flex-row justify-content-between">
                                            <div class="leftt">
                                                <h2>Rekomendasi</h2>
                                            </div>
                                            <div class="right d-flex flex-row justify-content-end align-items-end gap-3 fw-bolder" style="color: #999999">
                                                <p>All</p>
                                                <p>Tradisional</p>
                                                <p>Cake</p>
                                                <p>Viral</p>
                                            </div>
                                        </div>
                                        
                                          <div class="main-resep">
                                            @for ($i = 0; $i < 6; $i++)
                                            <div class="col-md-2 pt-5 d-flex justify-content-center">
                                                <div class="person1 position-relative dist">
                                                    <div class="main-img d-flex justify-content-center position-relative" style="z-index: 2;">
                                                        <img src="{{ asset('img/pizza-bg.png') }}" alt=""  class="img-fluid">
                                                    </div>
                                                    <div class="card position-relative" style="z-index: 1; margin-top: -80px; padding-top: 70px; height: 360px;">
                                                        <div class="card-body text-center d-flex flex-column gap-3">
                                                            <h5>Fresh Chicken Veggies</h5>
                                                            <span class="positi">120</span>                       
                                                        </div>
                                                        <div class="second-main-body">
                                                            <div class="row justify-content-center pt-1 pb-3">
                                                                <div class="col-md-5 border-end text-center">
                                                                    Type food <br>
                                                                    <span class="fw-bold">Simpel</span>
                                                                </div>
                                                                <div class="col-md-5 text-center">
                                                                    15Mnt
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="third-total">
                                                            <div class="row border-top justify-content-center p-3">
                                                                <div class="col-md-5 text-center">
                                                                    <span>666</span>
                                                                </div>
                                                                <div class="col-md-5 text-center pb-3">
                                                                    +
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor
                                          </div>
                                           <div class="main-resep">
                                            @for ($i = 0; $i < 6; $i++)
                                            <div class="col-md-2 pt-5 d-flex justify-content-center">
                                                <div class="person1 position-relative dist">
                                                    <div class="main-img d-flex justify-content-center position-relative" style="z-index: 2;">
                                                        <img src="{{ asset('img/pizza-bg.png') }}" alt="" width="150px" class="img-fluid">
                                                    </div>
                                                    <div class="card position-relative" style="z-index: 1; margin-top: -80px; padding-top: 70px; height: 360px;">
                                                        <div class="card-body text-center d-flex flex-column gap-3">
                                                            <h5>Fresh Chicken Veggies</h5>
                                                            <span class="positi">120</span>                       
                                                        </div>
                                                        <div class="second-main-body">
                                                            <div class="row justify-content-center pt-1 pb-3">
                                                                <div class="col-md-5 border-end text-center">
                                                                    Type food <br>
                                                                    <span class="fw-bold">Simpel</span>
                                                                </div>
                                                                <div class="col-md-5 text-center">
                                                                    15Mnt
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="third-total">
                                                            <div class="row border-top justify-content-center p-3">
                                                                <div class="col-md-5 text-center">
                                                                    <span>666</span>
                                                                </div>
                                                                <div class="col-md-5 text-center pb-3">
                                                                    +
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor
                                           </div>
                                     


                                
                                           <div class="col-md-2 Details" id="Details">
                                            <div class="row d-flex flex-column">
                                                <div class="col-md-6 w-100">
                                                    <div class="accordion">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" onclick="toggleAccordion(this);">
                                                                    Accordion Item #1
                                                                </button>
                                                            </h2>
                                                            <div class="accordion-body" style="display: none;">
                                                                Ini adalah konten untuk accordion item #1. Kamu bisa menambahkan informasi lebih lanjut di sini.
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" onclick="toggleAccordion(this);">
                                                                    Accordion Item #2
                                                                </button>
                                                            </h2>
                                                            <div class="accordion-body" style="display: none;">
                                                                Ini adalah konten untuk accordion item #2. Kamu bisa menambahkan informasi lebih lanjut di sini.
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" onclick="toggleAccordion(this);">
                                                                    Accordion Item #3
                                                                </button>
                                                            </h2>
                                                            <div class="accordion-body" style="display: none;">
                                                                Ini adalah konten untuk accordion item #3. Kamu bisa menambahkan informasi lebih lanjut di sini.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w-100">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio hic expedita qui, minima at rerum sunt! Necessitatibus voluptatem dolor sequi, laborum harum earum omnis debitis magnam hic, possimus soluta at.
                                                </div>
                                            </div>
                                        </div>
                                        
                                     
                                        
                                        <script>
                                        function toggleAccordion(button) {
                                            const body = button.parentElement.nextElementSibling;
                                            body.classList.toggle('show');
                                            if (body.classList.contains('show')) {
                                                body.style.display = 'block';
                                            } else {
                                                body.style.display = 'none';
                                            }
                                        }
                                        </script>
  
                </div>
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3ngdSTzOGrLg0Lr5bYZ9jlbQj66BF8G5i7P6r6yvcfQNXs+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

 <script>


const hoverKey = document.getElementById('hover-house');
const content1 = document.querySelector('.content-1');
content1.style.display = 'none';
content1.style.width = '200px';

function showContent() {
    content1.style.display = 'block';
    content1.style.zIndex = '9999';
    content1.style.width = '200px';
    content1.style.position = 'absolute';
    content1.style.marginLeft = '100px';
}

function hideContent() {
    setTimeout(() => {
        if (!hoverKey.matches(':hover') && !content1.matches(':hover')) {
            content1.style.display = 'none';
        }
    }, 300);
}

hoverKey.addEventListener('mouseenter', showContent);
content1.addEventListener('mouseenter', showContent);
hoverKey.addEventListener('mouseleave', hideContent);
content1.addEventListener('mouseleave', hideContent);









window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    
    if (window.scrollY > 50) {
        header.style.backgroundColor = '#f8f9fa'; 

    } else {
        header.style.backgroundColor = 'transparent'; 
        header.style.padding = '2%'; 

    }
});






$(document).ready(function () {
    // Mengatur style awal
    $('#content input').css("margin-left", "50px");
    $('#content img').css("margin-left", "200px");
    $('#Details').css('display', 'none');
    $('#content').removeClass("content");
    $('.humberger').css('display', ''); 

    $('#klik').click(function (e) {
        e.preventDefault();

        $('#Details').toggle();

        if ($('#Details').is(':visible')) {
            $('#content').removeClass("col-md-12");
            $('#content').addClass("img-utama img content");
            $('#content input').css({
                "margin-left": "300px",
                "width": "300px"
            });
        } else {
            $('#content').removeClass("content");
            $('#content').addClass("col-md-12 img-utama img");
            $('#content input').css({
                "width": "100px",
                "margin-left": "100px"
            });
        }
    });

    $('.sidebar span').click(function (e) {
        e.preventDefault();

        $('.sidebar span').css({
            'color': '',
            'font-weight': ''
        });

        $('#sidebar').css({
            'padding': '0px'
        });

        $(this).css({
            'color': 'purple',
            'font-weight': 'bold',
            'transition': '0.2s'
        });
    });

    $('.left').click(function () {
        $('#sidebarMenu').toggle('display', 'none');
    });


});

  




 </script>
</body>
</html>
