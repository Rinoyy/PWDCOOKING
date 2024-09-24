@extends('layout.app')

@section('content')
<div class="container-fluid part bg-light" style="height: 800px;">
    <div class="row d-flex justify-content-center pt-10">
        <div class="col-md-4 d-flex justify-content-center mt-10 main-text flex-column">
            <h1 class="text-dark">
                welcome to Codas,
                <span class="auto-type"><br></span>
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum in sed, aliquam fugiat iste, libero culpa corrupti quibusdam possimus officia nostrum neque magnam soluta reiciendis nam dolore, repudiandae nisi.
            </p>
        </div>
        <div class="col-md-5 main-bg">
            <img src="{{ asset('img/pizza-bg.png') }}" alt="Pizza Background" class="img-fluid" width="700px">
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

<div class="container-fluid ungah bg-light">
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
            @for ($i = 0; $i < 6; $i++)
            <div class="col-md-3 pt-5 d-flex justify-content-center">
                <div class="person1 position-relative dist">
                    <div class="main-img d-flex justify-content-center position-relative" style="z-index: 2;">
                        <img src="{{ asset('img/pizza-bg.png') }}" alt="" width="200px" class="img-fluid">
                    </div>
                    <div class="card position-relative" style="z-index: 1; margin-top: -80px; padding-top: 100px;">
                        <div class="card-body text-center d-flex flex-column gap-5">
                            <h2>Fresh Chicken Veggies</h2>
                            <span class="positi">120</span>                       
                        </div>
                        <div class="second-main-body">
                            <div class="row justify-content-center pt-3 pb-3">
                                <div class="col-md-5 border-end text-center ">
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

// INI UNTUK  CONTRIBUTOS
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
@endsection
