let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slides img');
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    const offset = -currentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}