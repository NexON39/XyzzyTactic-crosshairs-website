window.addEventListener('scroll', function() {
    let navbar = document.querySelector('.navbar');
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.style.margin = '0';
        navbar.style.borderRadius = '0';
        navbar.style.padding = '0.5rem 2rem';
    } else {
        navbar.style.margin = '2rem 2rem 0 2rem';
        navbar.style.borderRadius = '20px';
        navbar.style.padding = '0 2rem';
    }
})