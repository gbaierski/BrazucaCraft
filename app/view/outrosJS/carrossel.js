const slider = document.querySelector(".carrosselModosDeJogo");
const slides = document.querySelectorAll(".itemCarrossel");
const button = document.querySelectorAll(".botaoCarrossel");

let current = 0;
let prev = 4;
let next = 1;

for (let i = 0; i < button.length; i++) {
    button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
}

const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

const gotoNext = () => current < 4 ? gotoNum(current + 1) : gotoNum(0);

const gotoNum = number => {
    current = number;
    prev = current - 1;
    next = current + 1;

    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("ativo");
        slides[i].classList.remove("anterior");
        slides[i].classList.remove("proximo");
    }

    if (next == 5) {
        next = 0;
    }

    if (prev == -1) {
        prev = 4;
    }

    slides[current].classList.add("ativo");
    slides[prev].classList.add("anterior");
    slides[next].classList.add("proximo");
}