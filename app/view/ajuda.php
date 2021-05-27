<?php 
require 'header.php';
?>

<br>
<br>
<br>
<br>
<br>

<div id="dropdownAjuda">

    <button id="botaoAjudaSite" class="botaoDropdownAjuda">Site</button>
    <div id="dropdownSite" class="conteudoDropdownAjuda">
        <div style="height: 300px; width:200px;">
            <br>

            <?php
            $consulta = [1 => ["Não consigo me logar", "Bla bla bla"], 2 => ["Problema B Site", "BBBB"], 3 => ["Problema C Site", "CCCC"], 4 => ["Problema D Site", "DDDD"]];
            foreach ($consulta as $problemas => $problema) {
                echo '<button id="problemaSite_'.$problemas.'" class="botaoDropdownAjuda" onclick="abrirOpcaoSite('.$problemas.')">'.$problema[0].'</button>';
                echo '<div id="dropdownOpcaoSite_'.$problemas.'" class="conteudoDropdownAjuda">                
                         <h3>'.$problema[1].'</h3>
                      </div>';
            }

            ?>

        </div>
    </div>
    <button id="botaoAjudaJogo" class="botaoDropdownAjuda">Jogo</button>
    <div id="dropdownJogo" class="conteudoDropdownAjuda">
        <div style="height: 300px; width:200px;">
            <br>

            <?php
            $consulta = [1 => ["Problema A Jogo", "EEEE"], 2 => ["Problema B Jogo", "FFFF"], 3 => ["Problema C Jogo", "GGGG"], 4 => ["Problema D Jogo", "HHHH"]];
            foreach ($consulta as $problemas => $problema) {
                echo '<button id="problemaJogo_'.$problemas.'" class="botaoDropdownAjuda" onclick="abrirOpcaoJogo('.$problemas.')">'.$problema[0].'</button>';
                echo '<div id="dropdownOpcaoJogo_'.$problemas.'" class="conteudoDropdownAjuda">                
                         <h3>'.$problema[1].'</h3>
                      </div>';
            }

            ?>

        </div>
    </div>

</div>

<script>
//os cara q escutam
document.getElementById("botaoAjudaSite").addEventListener("click", abrirDropdownAjudaSite);
document.getElementById("botaoAjudaSite").addEventListener("click", escondeBotaoJogo);

document.getElementById("botaoAjudaJogo").addEventListener("click", abrirDropdownAjudaJogo);
document.getElementById("botaoAjudaJogo").addEventListener("click", escondeBotaoSite);

//funçoes que abrem os dropdowns das opções
function abrirOpcaoSite(id) {

document.getElementById("dropdownOpcaoSite_"+ id).classList.toggle("show");
}

function abrirOpcaoJogo(id) {

document.getElementById("dropdownOpcaoJogo_"+ id).classList.toggle("show");
}


//Esconde botões principais
function escondeBotaoSite() {

    var dropdowns = document.getElementsByClassName("botaoDropdownAjuda");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
            document.getElementById("botaoAjudaSite").classList.toggle("hide");
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
}

</script>



