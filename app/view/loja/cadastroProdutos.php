<?php require '../view/header.php' ?>

<div class="clear"></div>
<div id="background-cadastroProduto">
    <div id="div-cadastroProduto">
        <h2 id="cadastroProduto-titulo"><?= $nomeForm ?></h2>
           

            <?php

                // Parte Edição      
            if($edicao == true){

                foreach ($produtos as $produto) { ?>

                <form action="..\control\produtos.php?action=editarProduto&ai_produto=<?=$produto['ai_produto']?>" enctype="multipart/form-data" method="post" id="form-cadastroProdutos">

                <label for="nomeproduto" class="label-cadastroProduto">Nome do Produto:</label>
                <input value="<?= $produto['nomeProduto'] ?>" placeholder="<?= $produto['nomeProduto'] ?> " type="text" name="nomeProduto"  class="cadastroProduto" id="nomeProduto">

                <label for="precoProduto" class="label-cadastroProduto">Preço:</label>
                <input value="<?= $produto['precoProduto'] ?>" placeholder="<?= $produto['precoProduto'] ?>"  type="text" name="precoProduto" class="cadastroProduto" id="precoProduto">

                <label for="imagemProduto" class="label-cadastroProduto">Selecione uma imagem: </label>
                <input name="imagemProduto" value="" type="file" class="cadastroProduto" id="imagemProduto" >

                <label   for="descricaoProduto" class="label-cadastroProduto" id="label-descricaoProduto">Descrição:</label>
                <textarea required type="text" value="<?= $produto['descricaoProduto'] ?>" placeholder="<?= $produto['descricaoProduto'] ?> "  name="descricaoProduto" class="cadastroProduto" id="descricaoProduto" rows="5" ></textarea>

                <div class="clear"></div>

                <input type="submit" name="cadastrarProduto" value="Editar" id="botao-cadastrarProduto">
            <?php }
                }else{ 
                    // Parte Cadastro
                    ?>

                <form action="..\control\produtos.php?action=cadastroProduto" enctype="multipart/form-data" method="post" id="form-cadastroProdutos">

                <label for="nomeproduto" class="label-cadastroProduto">Nome do Produto:</label>
                <input  type="text" name="nomeProduto"  class="cadastroProduto" id="nomeProduto">

                <label for="precoProduto" class="label-cadastroProduto">Preço:</label>
                <input type="text" name="precoProduto" class="cadastroProduto" id="precoProduto">

                <label for="imagemProduto" class="label-cadastroProduto">Selecione uma imagem: </label>
                <input name="imagemProduto" type="file" class="cadastroProduto" id="imagemProduto" >

                <label   for="descricaoProduto" class="label-cadastroProduto" id="label-descricaoProduto">Descrição:</label>
                <textarea name="descricaoProduto" class="cadastroProduto" id="descricaoProduto" rows="5" ></textarea>

                <div class="clear"></div>

                <input type="submit" name="cadastrarProduto" value="Cadastrar" id="botao-cadastrarProduto">
                <?php }?>
            </form>
    </div>
</div>

<?php require '../view/footer.php' ?>