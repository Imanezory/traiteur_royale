const slider = document.querySelector('#testimonial-slider .flex');
const dots = document.querySelectorAll('.dot');

let index = 0;

function updateSlider() {
  slider.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });
}

dots.forEach((dot, i) => {
  dot.addEventListener('click', () => {
    index = i;
    updateSlider();
  });
});

updateSlider();
