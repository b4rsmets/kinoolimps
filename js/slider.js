const slider = document.getElementById("slider");
const slides = slider.getElementsByTagName("img");
const totalSlides = slides.length;
const slideIndicators = document.getElementById("slide-indicators");
for (let i = 0; i < totalSlides; i++) {
const indicator = document.createElement("div");
indicator.classList.add("indicator");
slideIndicators.appendChild(indicator);
}
const indicators = slideIndicators.getElementsByClassName("indicator");
let currentSlide = 0;

indicators[currentSlide].classList.add("active");
slides[currentSlide].classList.add("active");

setInterval(() => {
slides[currentSlide].classList.remove("active");
indicators[currentSlide].classList.remove("active");
currentSlide = (currentSlide === totalSlides - 1) ? 0 : currentSlide + 1;
slides[currentSlide].classList.add("active");
indicators[currentSlide].classList.add("active");
}, 10000);