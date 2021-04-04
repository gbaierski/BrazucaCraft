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
  
  document.getElementById("botaoFecharMenu").style = 'opacity: 1; transition-duration: 2s;';
  document.getElementById("secondBody").style = 'filter: blur(8px); pointer-events: none;';
  document.querySelector('.nav-mobile').style = 'display:none;';
  document.querySelector('.header').style = 'background-color:transparent';
  document.getElementById("footer").style = 'filter: blur(8px); pointer-events: none;';
}
