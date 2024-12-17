document.addEventListener('scroll', function() {
    const navbar = document.querySelector('.main-navbar');
    if (window.scrollY > 50) { 
        navbar.classList.add('bg-scroll');
    } else {
        navbar.classList.remove('bg-scroll');
    }
});
