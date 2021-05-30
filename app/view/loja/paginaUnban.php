<?php require "../view/header.php"; ?> 

<section id="colunasUnban">
    <a href="../control/redirecionamento.php?action=homeLoja">
        <button class="botaoVoltar" id="voltarParaLojaUnban">Voltar para a Loja</button>
    </a>

    <div id="tituloUnban"> Unban</div>

    <button id="botaoUnban" onclick="abrirBotaoUnban()">Como funciona o UnBan?</button>
    <div id="sobreUnban" class="hide" style="width:50%; text-align:center; margin-left:25%; color:white; margin-top:1.4vw;">
    Olha mano, tu fez merda e foi banido. Agora se tu quiser jogar denovo
    adivinha, VAI TER QUE PAGAR IMBECIL.
    </div>

    <div class="produtoUnban">
        <img class="imagemUnban" src="../../assets/img/paginas/home/logo.png">
        <div class="tituloUnban">Unban 1</div>
        <div class="descricaoUnban">Retira seu banimento permanentemente</div>
        <button class="botaoComprarUnban">R$ 30,00</button>
    </div>
</section>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>

<script>
    function abrirBotaoUnban(){
        var id =  document.getElementById("sobreUnban");
        if (id.classList.contains('show')) {
            document.getElementById("sobreUnban").classList.toggle("hide");
        }else{
            document.getElementById("sobreUnban").classList.toggle("show");
            document.getElementById("sobreUnban").classList.remove("hide");
        }
    }
</script>