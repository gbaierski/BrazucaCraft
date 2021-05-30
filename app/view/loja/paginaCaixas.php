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
        <button class="botaoComprarCaixa" id="botaoComprarCaixa_1">R$ 5,00</button>

        <div class="divQuantidadeCaixas">
            <div class="botaoNumeroCaixas" id="botaoDiminuirCaixa_1" onclick="diminuiQtdCaixa('1', 5)"><img src="../../assets/img/icons/seta.png" class="icon-setaNumeroCaixas"></div>
            <input type="number" class="quantidadeCaixa" id="quantidadeCaixa_1" min="1" max="100" value="1" readonly>
            <div class="botaoNumeroCaixas" id="botaoAumentarCaixa_1" onclick="aumentaQtdCaixa('1', 5)"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaNumeroCaixas"></div>
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
        <button class="botaoComprarCaixa" id="botaoComprarCaixa_2">R$ 10,00</button>

        <div class="divQuantidadeCaixas">
            <div class="botaoNumeroCaixas" id="botaoDiminuirCaixa_2" onclick="diminuiQtdCaixa('2', 10)"><img src="../../assets/img/icons/seta.png" class="icon-setaNumeroCaixas"></div>
            <input type="number" class="quantidadeCaixa" id="quantidadeCaixa_2" min="1" max="100" value="1" readonly>
            <div class="botaoNumeroCaixas" id="botaoAumentarCaixa_2" onclick="aumentaQtdCaixa('2', 10)"><img src="../../assets/img/icons/setaVirada.png" class="icon-setaNumeroCaixas"></div>
        </div>
       
    </div>

</section>

<script>

    function alteraPrecoProduto (preco, elemento, qtd) {

        if(qtd == 0) {

            document.getElementById(elemento).innerHTML = 'R$ ' + preco +',00'
        } else {
            var calculo =  'R$ ' + preco * qtd + ',00'
            document.getElementById(elemento).innerHTML = calculo
        }
    }

    function aumentaQtdCaixa(caixa, preco) {

        var elemento = 'botaoComprarCaixa_'+ caixa
        var qtdCaixa = document.getElementById("quantidadeCaixa_" + caixa);
        var qtd = parseInt(qtdCaixa.value) + 1;

        if (qtd <= 100) {
            qtdCaixa.value = qtd
        } else {
            qtdCaixa.value = 100
        }

        alteraPrecoProduto(preco, elemento, qtd, 5)
    }

    function diminuiQtdCaixa(caixa, preco) {

        var elemento = 'botaoComprarCaixa_'+ caixa
        var qtdCaixa = document.getElementById("quantidadeCaixa_" + caixa);
        var qtd = parseInt(qtdCaixa.value) - 1;

        if (qtd >= 1) {
            qtdCaixa.value = qtd
        } else {
            qtdCaixa.value = 1
        }
        alteraPrecoProduto(preco, elemento, qtd)
    }

</script>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>