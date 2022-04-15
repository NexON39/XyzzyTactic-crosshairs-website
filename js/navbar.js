let menu_mobile = document.querySelector('.menu-mobile');
let mobile_btn = document.querySelector('.mobile_btn'); 

mobile_btn.addEventListener('click', function() {
    menu_mobile.classList.toggle('active');
})

window.addEventListener('scroll', function() {
    let navbar = document.querySelector('.navbar');
    let top_btn = document.querySelector('.top_btn');
    let footer = document.querySelector('.footer');
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.style.margin = '0';
        navbar.style.borderRadius = '0';
        navbar.style.padding = '0.5rem 2rem';
        top_btn.style.display = 'block';
        footer.style.bottom = '0';
    } else {
        navbar.style.margin = '2rem 2rem 0 2rem';
        navbar.style.borderRadius = '20px';
        navbar.style.padding = '0 2rem';
        top_btn.style.display = 'none';
        footer.style.bottom = '-50px';
    }
})

