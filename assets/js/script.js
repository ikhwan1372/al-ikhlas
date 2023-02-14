const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    if(window.scrollY > 1) {
        navbar.classList.replace('bg-transparent', 'nav-color');
    }else if (this.window.scrollY <= 0) {
        navbar.classList.replace('nav-color', 'bg-transparent')
    }
});

const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

setInterval(() => {
  slides[currentSlide].style.display = 'none';
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].style.display = 'block';
}, 2000);
