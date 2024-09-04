document.addEventListener('scroll', function() {
    const navbar = document.querySelector('.main-navbar');
    
    if (window.scrollY > 50) { // Change color after scrolling down 50px
        navbar.classList.add('bg-scroll');
    } else {
        navbar.classList.remove('bg-scroll');
    }
});
