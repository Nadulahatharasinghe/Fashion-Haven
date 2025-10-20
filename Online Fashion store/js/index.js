// JavaScript for Slider Controls
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

document.querySelector('.prev').addEventListener('click', () => {
    changeSlide(-1);
});

document.querySelector('.next').addEventListener('click', () => {
    changeSlide(1);
});

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
});

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

function showSlide(index) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');

    currentSlide = (index + slides.length) % slides.length;

    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

showSlide(currentSlide);


