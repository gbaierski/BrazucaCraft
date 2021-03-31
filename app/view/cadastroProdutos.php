<?php require 'header.php' ?>

<div class="clear"></div>
<div id="background-cadastroProduto">
    <div id="div-cadastroProduto">
        <h2 id="cadastroProduto-titulo"><?= $nomeForm ?></h2>
           

            <?php if($edicao == true){

                foreach ($produtos as $produto) { ?>

                <form action="..\control\produtos.php?action=editarProduto&ai_produto=<?=$produto['ai_produto']?>" method="post" id="form-cadastroProdutos">

                <label for="nomeproduto" class="label-cadastroProduto">Nome do Produto:</label>
                <input placeholder="<?= $produto['nomeProduto'] ?> " type="text" name="nomeProduto"  class="cadastroProduto" id="nomeProduto">

                <label for="precoProduto" class="label-cadastroProduto">Preço:</label>
                <input placeholder="<?= $produto['precoProduto'] ?>"  type="text" name="precoProduto" class="cadastroProduto" id="precoProduto">

                <label   for="descricaoProduto" class="label-cadastroProduto" id="label-descricaoProduto">Descrição:</label>
                <textarea placeholder="<?= $produto['descricaoProduto'] ?> "  name="descricaoProduto" class="cadastroProduto" id="descricaoProduto" rows="5" ></textarea>

                <div class="clear"></div>

                <input type="submit" name="cadastrarProduto" value="Editar" id="botao-cadastrarProduto">
            <?php };
                }else{ ?>

                <form action="..\control\produtos.php?action=cadastroProduto" method="post" id="form-cadastroProdutos">

                <label for="nomeproduto" class="label-cadastroProduto">Nome do Produto:</label>
                <input  type="text" name="nomeProduto"  class="cadastroProduto" id="nomeProduto">

                <label for="precoProduto" class="label-cadastroProduto">Preço:</label>
                <input type="text" name="precoProduto" class="cadastroProduto" id="precoProduto">

                <label   for="descricaoProduto" class="label-cadastroProduto" id="label-descricaoProduto">Descrição:</label>
                <textarea name="descricaoProduto" class="cadastroProduto" id="descricaoProduto" rows="5" ></textarea>

                <div class="clear"></div>

                <input type="submit" name="cadastrarProduto" value="Cadastrar" id="botao-cadastrarProduto">
                <?php }?>
            </form>
    </div>
</div>

<?php require 'footer.php' ?>