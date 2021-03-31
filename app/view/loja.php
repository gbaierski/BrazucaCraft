<?php require 'header.php' ?> 

<div id="produtos-loja">
    <?php foreach ($produtos as $produto) { ?>

    <div class="div-produto">
        <img class="imagem-produto" src="../../assets/img/vips/<?=$produto['imagemProduto']?>">
        <div class="atributos-produto">
            <div class="nome-produto"><?= $produto['nomeProduto'] ?></div>
            <div class="preco-produto"><?= $produto['precoProduto'] ?></div>
            <div class="descricao-produto"><?=  $produto['descricaoProduto'] ?></div>
        </div>

        <button class="produto-comprar">Comprar</button>

        <div class="botoesAdmin-produto">
            <button  class="produto-editar"><a href="../control/redirecionamento.php?action=paginaEditarproduto&ai_produto=<?= $produto['ai_produto']?>">Editar</a></button>
            <button  class="produto-deletar"><a href="../control/produtos.php?action=deletarProduto&ai_produto=<?= $produto['ai_produto']?>">Deletar</a></button>
        </div>
    </div>

    <?php } ?>
</div>

<div class="clear"></div>
<?php require 'footer.php'; ?>
   