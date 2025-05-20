let slideAtual = 0;
const slides = document.querySelectorAll('.slide');

function mostrarSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
}

function mudarSlide(direcao) {
  slideAtual += direcao;
  if (slideAtual < 0) slideAtual = slides.length - 1;
  if (slideAtual >= slides.length) slideAtual = 0;
  mostrarSlide(slideAtual);
}

document.addEventListener('DOMContentLoaded', () => {
  mostrarSlide(slideAtual);
});
