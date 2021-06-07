<?php require "../view/header.php"; ?> 

<section id="colunasVip">

    <a href="../control/redirecionamento.php?action=homeLoja">
        <button class="botaoVoltar" id="voltarParaLojaVips">Voltar para a Loja</button>
    </a>

    <div id="tituloVips"> Vips BrazucaCraft</div>

    <div class="produtoVip">
        <div class="imagemVip" style="background-color: yellow;"></div>
        <div class="tituloProdutoVip">VIP CANARINHO</div>
        <div class="conteudoVip">
            <?php
            $produtos = ['TamanhoTerreno' => 'Terreno rank B', 'Dinheiro' =>'R$ 1000,00', 'Caixas' =>'3 Caixas Misteriosas', 'Cosmesticos' =>'2 Cosméticos', 'emojis' =>'3 emojis'];

            foreach ($produtos as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <a href="../control/carrinhoCompras.php?action=adicionarnocarrinho&ai_produto=<?= 7?>"><button class="botaoComprarVip">R$ 10,00</button></a>
    </div>

    <div class="produtoVip">
        <div class="imagemVip" style="background-color: brown;"></div>
        <div class="tituloProdutoVip">VIP ARIRANHA</div>
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

    <div class="produtoVip">
        <div class="imagemVip" style="background-color: orange;"></div>
        <div class="tituloProdutoVip">VIP JAGUAR</div>
        <div class="conteudoVip">
            <?php
            $beneficiosVip = ['Terreno rank A+','R$ 3000,00', '10 Caixas Misteriosas', '7 Cosméticos', '5 emojis'];

            foreach ($beneficiosVip as $beneficio) {

                echo $beneficio;
                echo '</br>';
            }
            ?>
        </div>
        <button class="botaoComprarVip">R$ 40,00</button>
    </div>
    
    <div id="passeBatalha">
        <div id="tituloPasse">PASSE DE BATALHA</div>
        <div id="temporadaPasse">TEMPORADA 1</div>

        <button id="botaoComprarPasse">R$ 15,00</button>
        
        <div class="clear"></div>
        
        <div id="visualizarRecompensasPasse">VISUALIZAR RECOMPENSAS </div>
    </div>
       
    
</section>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>