var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("slideEquipe");
var pontos = document.getElementsByClassName("ponto");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
}
for (i = 0; i < pontos.length; i++) {
    pontos[i].className = pontos[i].className.replace(" equipeAtivo", "");
}
slides[slideIndex-1].style.display = "block";  
pontos[slideIndex-1].className += " equipeAtivo";
}