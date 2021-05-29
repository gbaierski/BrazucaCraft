<?php 
require 'header.php';
?>

<br>
<br>
<br>
<br>
<br>    
<br>    


<div id="caixaDropdownAjuda">

    <div id="botaoAjudaSite" class="botaoDropdownAjuda" tabindex="1">Site</div>
    <div id="dropdownSite" class="conteudoDropdownAjuda">
        <div class="dropdownAjuda">
            <br>

            <?php
            
            $consulta = [
            1 => ["Não consigo me logar", "Se fodeu"], 
            2 => ["Oque? Gustavo Baierski, a maior mente gamer da historia!", "Gustavo Baierski também conhecido por <i>GUSTAVO BAIERSKI</i>, hoje foi declarado como o maior gamer do seculo.
            Internatuas comentam: O nivel de gameplay dele é sem precedentes, nunca vimos algo parecido. Afirmam pesquisadores que a mente desse homem é capaz de processar quantidades
            de dados massivas em segundos, superando facilmente todas as grande mentes que já pisaram nesse planeta. Sem duvidas respirar o mesmo ar desse ser inigualavel pode ser o
            motivo de vida de centenas de milhares de pessoas ao redor do mundo."], 
            3 => ["Jovem de 20 anos fica rico usando está tecnica", "Um jovem de 20 anos chamado The Soethe ganha a vida jogando no bixo, investindo esse dinheiro na bolsa de valores
            e usando o dinheiro ganho para jogar na trimania. Em entrevista ele afirma: Somente para os praticantes da foda. Percebe-se que são essas as palavras de alguem com uma
            mente muito além da propria idade. Agora ele desistiu de ficar rico e quer ajudar VOCÊ a ficar rico também, quer saber como? Arrasta pra cima."], 
            4 => ["Por que o João é tão gay", "SIM"]];

            foreach ($consulta as $problemas => $problema) {
                echo '<button id="problemaSite_'.$problemas.'" class="botaoDropdownAjuda" onclick="abrirOpcaoSite('.$problemas.')">'.$problema[0].'</button>';
                echo '<div id="dropdownOpcaoSite_'.$problemas.'" class="conteudoDropdownOpcao">                
                         <h3 class="textoDropdown">'.$problema[1].'</h3>
                         <div style="color:white float:left; text-align: left;" onclick="fecharOpcaoSite('.$problemas.')">Fechar</div>
                         <a href="../view/ajudaMensagem.php?problema='.$problemas.'">Não consegue resolver mesmo assim</a>
                      </div>';
            }

            ?>
        </div>
    </div>
    <div id="botaoAjudaJogo" class="botaoDropdownAjuda">Jogo</div>
    <div id="dropdownJogo" class="conteudoDropdownAjuda">
        <div class="dropdownAjuda">
            <br>

            <?php
            $consulta = [
            1 => ["Problema A Jogo", "EEEE"],
            2 => ["Problema B Jogo", "FFFF"], 
            3 => ["Problema C Jogo", "GGGG"], 
            4 => ["Problema D Jogo", "HHHH"]];

            foreach ($consulta as $problemas => $problema) {
                echo '<button id="problemaJogo_'.$problemas.'" class="botaoDropdownAjuda" onclick="abrirOpcaoJogo('.$problemas.')">'.$problema[0].'</button>';
                echo '<div id="dropdownOpcaoJogo_'.$problemas.'" class="conteudoDropdownOpcao">                
                        <h3 class="textoDropdown">'.$problema[1].'</h3>
                        <div style="color:white" onclick="fecharOpcaoJogo('.$problemas.')">Fechar</div>
                        <a href="../view/ajudaMensagem.php?action='.$problemas.'">Não consegue resolver mesmo assim</a>
                      </div>';
            }

            ?>

        </div>
    </div>

</div>

<script>

$('#botaoAjudaSite').on('click', function(){
    $(this).toggleClass('active');
    $('#dropdownSite').toggleClass('active');
});

$('#botaoAjudaJogo').on('click', function(){
    $(this).toggleClass('active');
    $('#dropdownJogo').toggleClass('active');
});

//os cara q escutam
document.getElementById("botaoAjudaSite").addEventListener("click", abrirDropdownAjudaSite);
document.getElementById("botaoAjudaSite").addEventListener("click", escondeBotaoJogo);

document.getElementById("botaoAjudaJogo").addEventListener("click", abrirDropdownAjudaJogo);
document.getElementById("botaoAjudaJogo").addEventListener("click", escondeBotaoSite);

//funçoes que abrem os dropdowns das opções
function abrirOpcaoSite(id) {

document.getElementById("dropdownOpcaoSite_"+ id).classList.toggle("show");
document.getElementById("dropdownOpcaoSite_"+ id).classList.toggle('active');
}

function abrirOpcaoJogo(id) {

document.getElementById("dropdownOpcaoJogo_"+ id).classList.toggle("show");
document.getElementById("dropdownOpcaoJogo_"+ id).classList.toggle('active');
}

function fecharOpcaoSite(id){

document.getElementById("dropdownOpcaoSite_" + id).classList.remove("show");
document.getElementById("dropdownOpcaoSite_" + id).classList.remove("active");

}

//funçao que fecha o dropdown das opções
function fecharOpcaoJogo(id){

document.getElementById("dropdownOpcaoJogo_" + id).classList.remove("show");
document.getElementById("dropdownOpcaoJogo_" + id).classList.remove("active");

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



