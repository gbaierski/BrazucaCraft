<?php require "../view/header.php"; ?> 

<section id="colunasVip">

    <a href="../control/redirecionamento.php?action=homeLoja">
        <button class="botaoVoltar" id="voltarParaLojaVips">Voltar para a Loja</button>
    </a>

    <div id="tituloVips"> Vips BrazucaCraft</div>

    <div class="colunaVip">
        <div class="imagemVip" style="background-color: rebeccapurple;"></div>
        <div class="tituloProdutoVip">VIP PODRE</div>
        <div class="conteudoVip">
            <?php
            $beneficiosVip = ['Terreno rank B','R$ 1000,00', '3 Caixas Misteriosas', '2 Cosméticos', '3 emojis'];

            foreach ($beneficiosVip as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <button class="botaoComprarVip">R$ 10,00</button>
    </div>

    <div class="colunaVip">
        <div class="imagemVip" style="background-color: red;"></div>
        <div class="tituloProdutoVip">VIP BÁSICO</div>
        <div class="conteudoVip">
            <?php
            $beneficiosVip = ['Terreno rank A','R$ 2000,00', '4 Caixas Misteriosas', '2 Cosméticos', '3 emojis'];

            foreach ($beneficiosVip as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <button class="botaoComprarVip">R$ 20,00</button>
    </div>

    <div class="colunaVip">
        <div class="imagemVip" style="background-color: green;"></div>
        <div class="tituloProdutoVip">VIP MÉDIO</div>
        <div class="conteudoVip">
            <?php
            $beneficiosVip = ['Terreno rank A+','R$ 3000,00', '10 Caixas Misteriosas', '7 Cosméticos', '3 emojis'];

            foreach ($beneficiosVip as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <button class="botaoComprarVip">R$ 40,00</button>
    </div>

    <div class="colunaVip">
        <div class="imagemVip" style="background-color: blue;"></div>
        <div class="tituloProdutoVip">VIP BRABO</div>
        <div class="conteudoVip">
            <?php
            $beneficiosVip = ['Terreno rank S','R$ 10000,00', '15 Caixas Misteriosas', '10 Cosméticos', '7 emojis'];

            foreach ($beneficiosVip as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <button class="botaoComprarVip">R$ 100,00</button>
    </div>
    
</section>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>