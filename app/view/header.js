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





//------------- Funções do MenuMobile -------------//



function menuMobile () {
  
  //Loop para percorrer os elementos do menuMobile
  var arrayElementos, elemento;
  arrayElementos = document.querySelectorAll(".opcao-menuMobile");
  for (elemento = 0; elemento < arrayElementos.length; elemento++) {
    
    arrayElementos[elemento].style = "display:block;";
  }

  document.getElementById("secondBody").style = 'filter: blur(8px); pointer-events: none;';
  document.querySelector('.nav-mobile').style = 'opacity:0;transition-duration: 1s;';
  document.getElementById("botao-login").style = 'opacity:0;transition-duration: 1s;';
  document.querySelector('.header').style = 'background-color:transparent';
  document.getElementById("footer").style = 'filter: blur(8px); pointer-events: none;';

  document.getElementById("div-lojaMobile").style = "display:block;";
  document.getElementById("imagem-menuMobile").style = 'display:block;'
  document.getElementById("botaoFecharMenu").setAttribute("disabled", true); //disable para evitar duplo clique
  document.getElementById("botaoFecharMenu").style = 'opacity: 1; transition-duration: 1s;';
  
  setTimeout(function() {

    //Loop para percorrer as imagens do menuMobile
    var arrayImagem, imagem;
    arrayImagem = document.querySelectorAll(".icon-linkMenuMobile");
    for (imagem = 0; imagem < arrayImagem.length; imagem++) {
      
      arrayImagem[imagem].style = "opacity:1;transition-duration: 1s;";
    }

    //Loop para percorrer o texto dos menus do menuMobile
    var arrayTextos, texto;
    arrayTextos = document.querySelectorAll(".texto-linkMenuMobile");
    for (texto = 0; texto < arrayTextos.length; texto++) {
      
      arrayTextos[texto].style = "opacity:1;transition-duration: 1s;";
    }
    
    document.getElementById("botao-lojaMobile").style="opacity:1;transition-duration: 1s;"
  }, 1000);

  setTimeout(function() {  // Sleep para evitar duplo clique (erro)
    document.getElementById("botaoFecharMenu").removeAttribute("disabled");
   }, 2000);
}





function fecharMenu () {

  //Loop para percorrer as imagens do menuMobile
  var arrayImagem, imagem;
  arrayImagem = document.querySelectorAll(".icon-linkMenuMobile");
  for (imagem = 0; imagem < arrayImagem.length; imagem++) {
    
    arrayImagem[imagem].style = "opacity:0;transition-duration: 1s;";
  }

  //Loop para percorrer o texto dos menus do menuMobile
  var arrayTextos, texto;
  arrayTextos = document.querySelectorAll(".texto-linkMenuMobile");
  for (texto = 0; texto < arrayTextos.length; texto++) {
    
    arrayTextos[texto].style = "opacity:0;transition-duration: 1s;";
  }
  
  document.getElementById("secondBody").style = 'filter: blur(0px); pointer-events: auto;';
  document.querySelector('.nav-mobile').style = 'opacity:1;transition-duration: 1s;';
  document.getElementById("botao-login").style = 'opacity:1;transition-duration: 1s;';
  document.querySelector('.header').style = 'background-color: rgba(0, 0, 0, 0.651), position: fixed;';
  document.getElementById("footer").style = 'filter: blur(0px); pointer-events: auto;';

  document.getElementById("menuMobile").setAttribute("disabled", true); //disable para evitar duplo clique
  document.getElementById("botao-lojaMobile").style = "opacity:0;transition-duration: 1s;";
  document.getElementById("imagem-menuMobile").style = 'opacity:0; transition-duration: 1s;';
  document.getElementById("botaoFecharMenu").style = 'opacity: 0; transition-duration: 1s;';

  setTimeout(function() {

    //Loop para percorrer os elementos do menuMobile
    var arrayElementos, elemento;
    arrayElementos = document.querySelectorAll(".opcao-menuMobile");
    for (elemento = 0; elemento < arrayElementos.length; elemento++) {
      
      arrayElementos[elemento].style = "display:none;";
    }

    document.getElementById("imagem-menuMobile").style = 'display:none;'; 
    document.getElementById("div-lojaMobile").style = 'display:none;';

  }, 1000);

  setTimeout(function() {
    document.getElementById("menuMobile").removeAttribute("disabled");
  }, 2000);
}