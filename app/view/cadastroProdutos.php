<?php require 'header.php' ?>

<h2 id="cadastroProduto-titulo"> Cadastro de Produto </h2>
    <form action="..\control\produtos.php?action=cadastroProduto" method="post" id="form-cadastroProdutos">

        <label for="nomeproduto">Nome do Produto</label>
        <input type="text" name="nomeProduto" id="nomeProduto" class="itemForm-produto">

        <br>

        <label for="precoProduto">Preço</label>
        <input type="decimal" name="precoProduto" id="precoProduto" class="itemForm-produto">

        <br>

        <label for="descricaoProduto">Descrição</label>
        <textarea name="descricaoProduto" id="descricaoProduto" class="itemForm-produto" rows="5" ></textarea>

        <br>
        
        <input type="submit" name="cadastrarProduto" value="Cadastrar Produto">

    </form>

    <br>




<?php require 'footer.php' ?>