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
            <div class="col-md-2 col-12 sidebar">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <p id="Menu" class="mb-0" style="margin-top: 5px;">FOR LOGO</p>
                        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            
                <div class="row pt-2">
                    <div class="col-md-2 mt-2">
                        <i class="bi bi-list h3" id="menu"></i>
                    </div>
                    <div class="col-10 collapse " id="sidebarMenu">
                        <ul class="fw-normal list-unstyled">
                            <li>
                                <div class="d-flex align-items-center mb-2" style="color: purple; font-weight: 600;">
                                    <i class="bi bi-house" style="color: red;"></i>
                                    <span style="color: purple; font-weight: 600; margin-left: 5px;">House</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-cookie" style="color: red;"></i>
                                    {{-- <span style="margin-left: 5px;"> --}}
                                        <a href="{{ Route('posts.resep') }}">Resep</a>
                                    {{-- </span> --}}
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-heart-fill" style="color: red;"></i>
                                    <span style="margin-left: 5px;">Favorite</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-person-circle" style="color: red;"></i>
                                    <span style="margin-left: 5px;">MY Account</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
            
            <div class="col-md-11 p-3">
                <div class="content" id="content">
                    <div class="row d-flex align-items-center ms-4">
                        <form action="" class="d-flex">
                            <input type="text" class="form-control me-2 rounded-normal" name="input" placeholder="Ayo cari resep makananmu!!!">
                            <button type="submit"  class="btn btn-success rounded-normal">Cari</button>
                            <i class="bi bi-bell-fill h3" style="margin-left: 20px" id="klik"></i>
                        </form>
                    </div>

                    <div class="row .utama">
                        <div class="col-md-10 d-flex justify-cotent-end img-utama" style="margin-left: 200px ">
                            <img src="{{ asset('img/1.png') }}" alt="">
                        </div>
                    </div>




                    
                   
                </div>
            </div>
            <div class="col-md-2 Details" id="Details">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum soluta dicta praesentium corporis temporibus labore quam beatae repudiandae eveniet cum, repellendus, amet neque ipsam dolores nulla facilis vitae, sequi itaque!
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3ngdSTzOGrLg0Lr5bYZ9jlbQj66BF8G5i7P6r6yvcfQNXs+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

 <script>


$(document).ready(function () {
    $('#content input').css("margin-left", "50px");
    $('#content img').css("margin-left", "200px");
    $('#Details').css('display', 'none');
    $('#content').removeClass("content");
    $('.humberger').css('display', )
    

    // $("#klik").click(function (e) { 
    //     e.preventDefault();
    //     $('#Details').toggle();

    //     if ($('#Details').is(':visible')) {
    //         $('#content').removeClass("col-md-12");
    //         $('#content').addClass("img-utama img");
    //         $('#content').addClass("content");
    //         $('#content input').css("margin-left", "300px");
    //         $('input').css("width", "300px")


    //     } else {
    //         $('#content').removeClass("content");
    //         $('#content').addClass("col-md-12");
    //         $('#content').addClass("img-utama img");
    //         $('input').css("width", "100px")
    //         $('input').css("margin-left", "100px")
      



    //     }
    // });


        $(document).ready(function() {
    $('.sidebar span').click(function(e) {
        e.preventDefault();

        $('.sidebar span').css({
            'color': '',
            'font-weight': ''
        });

        $(this).css({
            'color': 'purple',
            'font-weight': 'bold',
            'transition': '0.2s'
        });
    });
});

    $('#menu').click(function(){
        $('#sidebarMenu').toggle('display', 'none');
    })
  
});




 </script>
</body>
</html>
