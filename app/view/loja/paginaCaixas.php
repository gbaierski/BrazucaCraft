<?php require "../view/header.php"; ?> 

<section id="colunasCaixas">
    <a href="../control/redirecionamento.php?action=homeLoja">
        <button class="botaoVoltar" id="voltarParaLojaCaixas">Voltar para a Loja</button>
    </a>

    <div id="tituloCaixas"> Caixas Misteriosas</div>

    <div class="produtoCaixa">
        <img class="imagemCaixa" src="../../assets/img/paginas/home/logo.png">
        <div class="tituloCaixa">CAIXA PODRINHA</div>
        <div class="dropsCaixa">
            <?php

                $dropsNormais = ['a','b','c','d'];
                $dropsRaros = ['e','f','g'];
                $dropsEpicos = ['h','i'];
                $dropLendario = ['j'];

                foreach ($dropsNormais as $drop) {

                    echo '<div class="dropCaixa normal">'. $drop .'</div>';
                }

                foreach ($dropsRaros as $drop) {

                    echo '<div class="dropCaixa raro">'. $drop .'</div>';
                }

                foreach ($dropsEpicos as $drop) {

                    echo '<div class="dropCaixa epico">'. $drop .'</div>';
                }

                foreach ($dropLendario as $drop) {

                    echo '<div class="dropCaixa lendario">'. $drop .'</div>';
                }
            ?>

        </div>
        <button class="botaoComprarCaixa">COMPRAR</button>

        <div class="divQuantidadeCaixas">
            <div class="botaoNumeroCaixas" id="botaoDiminuirCaixa"><img src="../../assets/img/icons/seta.png" class="icon-setaNumeroCaixas"></div>
            <input type="number" class="quantidadeCaixa" min="1" max="1000" value="1" readonly>
            <div class="botaoNumeroCaixas" id="botaoAumentarCaixa"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaNumeroCaixas"></div>
        </div>
       
    </div>







    <div class="produtoCaixa">
        <img class="imagemCaixa" src="../../assets/img/paginas/home/logo.png">
        <div class="tituloCaixa">CAIXA BOA</div>
        <div class="dropsCaixa">
            <?php

                $dropsNormais = ['a','b'];
                $dropsRaros = ['c','d','e','f'];
                $dropsEpicos = ['g','h','i'];
                $dropLendario = ['j'];

                foreach ($dropsNormais as $drop) {

                    echo '<div class="dropCaixa normal">'. $drop .'</div>';
                }

                foreach ($dropsRaros as $drop) {

                    echo '<div class="dropCaixa raro">'. $drop .'</div>';
                }

                foreach ($dropsEpicos as $drop) {

                    echo '<div class="dropCaixa epico">'. $drop .'</div>';
                }

                foreach ($dropLendario as $drop) {

                    echo '<div class="dropCaixa lendario">'. $drop .'</div>';
                }
            ?>

        </div>
        <button class="botaoComprarCaixa">R$ 10,00</button>

        <div class="divQuantidadeCaixas">
            <div class="botaoNumeroCaixas" id="botaoDiminuirCaixa"><img src="../../assets/img/icons/seta.png" class="icon-setaNumeroCaixas"></div>
            <input type="number" class="quantidadeCaixa" min="1" max="1000" value="1" readonly>
            <div class="botaoNumeroCaixas" id="botaoAumentarCaixa"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaNumeroCaixas"></div>
        </div>
       
    </div>

</section>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>