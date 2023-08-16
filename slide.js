/*slides imagens*/
let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-item');
const indicators = document.querySelectorAll('.carousel-indicator');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

function showSlide(index) {
  if (index < 0) {
    slideIndex = slides.length - 1;
  } else if (index >= slides.length) {
    slideIndex = 0;
  } else {
    slideIndex = index;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove('active');
    indicators[i].classList.remove('active');
  }

  slides[slideIndex].classList.add('active');
  indicators[slideIndex].classList.add('active');
}

function showNextSlide() {
  showSlide(slideIndex + 1);
}

function showPrevSlide() {
  showSlide(slideIndex - 1);
}

function setupCarousel() {
  nextBtn.addEventListener('click', showNextSlide);
  prevBtn.addEventListener('click', showPrevSlide);

  for (let i = 0; i < indicators.length; i++) {
    indicators[i].addEventListener('click', () => showSlide(i));
  }

  setInterval(showNextSlide, 5000);
}

setupCarousel();