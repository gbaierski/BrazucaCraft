<?php 
require 'header.php';
?>

<br>
<br>
<br>
<br>
<br>

<div id="dropdownAjuda">

    <button id="botaoAjudaSite" class="botaoDropdownAjuda" onclick="abrirDropdownAjudaSite(), escondeBotaoJogo()">Site</button>
    <div id="dropdownSite" class="conteudoDropdownAjuda">
        <div style="height: 200px; width:100px;">
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaSiteOpcao_1()">Problema A Site</button>
            <div id="dropdownSiteOpcao-1" class="conteudoDropdownAjuda">                
                <h3>AAAA</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaSiteOpcao_2()">Problema B Site</button>
            <div id="dropdownSiteOpcao-2" class="conteudoDropdownAjuda">                
                <h3>BBBB</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaSiteOpcao_3()">Problema C Site</button>
            <div id="dropdownSiteOpcao-3" class="conteudoDropdownAjuda">                
                <h3>CCCC</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaSiteOpcao_4()">Problema D Site</button>
            <div id="dropdownSiteOpcao-4" class="conteudoDropdownAjuda">                
                <h3>DDDD</h3>
            </div>
        </div>
    </div>
    <button id="botaoAjudaJogo" class="botaoDropdownAjuda" onclick="abrirDropdownAjudaJogo(), escondeBotaoSite()">Jogo</button>
    <div id="dropdownJogo" class="conteudoDropdownAjuda">
        <div style="height: 200px; width:100px;">
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaJogoOpcao_1()">Problema A Jogo</button>
            <div id="dropdownJogoOpcao-1" class="conteudoDropdownAjuda">                
                <h3>EEEE</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaJogoOpcao_2()">Problema B Jogo</button>
            <div id="dropdownJogoOpcao-2" class="conteudoDropdownAjuda">                
                <h3>FFFF</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaJogoOpcao_3()">Problema C Jogo</button>
            <div id="dropdownJogoOpcao-3" class="conteudoDropdownAjuda">                
                <h3>GGGG</h3>
            </div>
            <br>
            <button class="botaoDropdownAjuda" onclick="abrirDropdownAjudaJogoOpcao_4()">Problema D Jogo</button>
            <div id="dropdownJogoOpcao-4" class="conteudoDropdownAjuda">                
                <h3>HHHH</h3>
            </div>
        </div>
    </div>

</div>

<script>
//Esconde botões principais
function escondeBotaoSite() {

    var dropdowns = document.getElementsByClassName("botaoDropdownAjuda");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
            document.getElementById("botaoAjudaSite").classList.toggle("hide");
          }else{
            document.getElementById("botaoAjudaSite").classList.toggle("show");
          }
        }
}
function escondeBotaoJogo() {
    var dropdowns = document.getElementsByClassName("botaoDropdownAjuda");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
            document.getElementById("botaoAjudaJogo").classList.toggle("hide");
          }else{
            document.getElementById("botaoAjudaJogo").classList.toggle("show");
          }
        }
}

//primeiro dropdown
function abrirDropdownAjudaSite() {
    document.getElementById("dropdownSite").classList.toggle("show");
    document.getElementById("botaoAjudaSite").classList.toggle("show");
}

function abrirDropdownAjudaJogo() {
    document.getElementById("dropdownJogo").classList.toggle("show");
    document.getElementById("botaoAjudaJogo").classList.toggle("show");
}

//segundo dropdown
function abrirDropdownAjudaSiteOpcao_1() {
    document.getElementById("dropdownSiteOpcao-1").classList.toggle("show");
}

function abrirDropdownAjudaSiteOpcao_2() {
    document.getElementById("dropdownSiteOpcao-2").classList.toggle("show");
}

function abrirDropdownAjudaSiteOpcao_3() {
    document.getElementById("dropdownSiteOpcao-3").classList.toggle("show");
}

function abrirDropdownAjudaSiteOpcao_4() {
    document.getElementById("dropdownSiteOpcao-4").classList.toggle("show");
}

function abrirDropdownAjudaJogoOpcao_1() {
    document.getElementById("dropdownJogoOpcao-1").classList.toggle("show");
}

function abrirDropdownAjudaJogoOpcao_2() {
    document.getElementById("dropdownJogoOpcao-2").classList.toggle("show");
}

function abrirDropdownAjudaJogoOpcao_3() {
    document.getElementById("dropdownJogoOpcao-3").classList.toggle("show");
}

function abrirDropdownAjudaJogoOpcao_4() {
    document.getElementById("dropdownJogoOpcao-4").classList.toggle("show");
}




//Dropdown
window.onclick = function(event) {

if (!event.target.matches('.botaoDropdownAjuda')) {
    var dropdowns = document.getElementsByClassName("conteudoDropdownAjuda");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {

      }
    }
}

//if (event.target == modal) {
//modal.style.display = "none";
//}

}
</script>