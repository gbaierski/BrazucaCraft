<?php require 'header.php' ?> 
<br>
<br>
<br>
<br>
<br>
<br>
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
        <a href="../control/redirecionamento.php?action=paginaEditarproduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-editar">Editar</button></a>
            <a href="../control/produtos.php?action=deletarProduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-deletar">Deletar</button></a>
        </div>
    </div>

    <?php } ?>
</div>

<div class="clear"></div>
<?php require 'footer.php'; ?>
   