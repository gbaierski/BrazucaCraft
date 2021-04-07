var modal = document.getElementById("modal");
var botaoLogin = document.getElementById("botao-login");
var span = document.getElementsByClassName("fechar")[0];

botaoLogin.onclick = function() {

modal.style.display = "block";
}

span.onclick = function() {

modal.style.display = "none";
}

function abrirDropdown() {

    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {

    //Dropdown
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {

            openDropdown.classList.remove('show');
          }
        }
    }

    if (event.target == modal) {
    modal.style.display = "none";
    }
}

function menuMobile () {

  document.getElementById("botaoFecharMenu").setAttribute("disabled", true); //disable para evitar duplo clique
  document.getElementById("botaoFecharMenu").style = 'opacity: 1; transition-duration: 1s;';
  document.getElementById("secondBody").style = 'filter: blur(8px); pointer-events: none;';
  document.querySelector('.nav-mobile').style = 'opacity:0;transition-duration: 1s;';
  document.querySelector('.header').style = 'background-color:transparent';
  document.getElementById("footer").style = 'filter: blur(8px); pointer-events: none;';
  document.getElementById("imagem-menuMobile").style = 'display:block;'

  setTimeout(function(){  // Sleep para evitar duplo clique (erro)
    document.getElementById("botaoFecharMenu").removeAttribute("disabled");
   }, 2000);
}

function fecharMenu () {

  document.getElementById("menuMobile").setAttribute("disabled", true); //disable para evitar duplo clique
  document.getElementById("imagem-menuMobile").style = 'opacity:0; transition-duration: 1s;';
  document.getElementById("botaoFecharMenu").style = 'opacity: 0; transition-duration: 1s;';
  document.getElementById("footer").style = 'filter: blur(0px); pointer-events: auto;';
  document.querySelector('.nav-mobile').style = 'opacity:1;transition-duration: 1s;';
  document.querySelector('.header').style = 'background-color: rgba(0, 0, 0, 0.651);';
  document.getElementById("secondBody").style = 'filter: blur(0px); pointer-events: auto;';

  setTimeout(function(){ document.getElementById("imagem-menuMobile").style = 'display:none;'; }, 1000);
  setTimeout(function(){  // Sleep para evitar duplo clique (erro)
    document.getElementById("menuMobile").removeAttribute("disabled");
   }, 2000);
}