<?php require 'header.php' ?>
<body>
<div id="div-cadastroProduto">
    <h2 id="cadastroProduto-titulo"> Cadastro de Produto </h2>
        <form action="..\control\produtos.php?action=cadastroProduto" method="post" id="form-cadastroProdutos">

            <label for="nomeproduto" class="itemForm-produto">Nome do Produto</label>
            <input type="text" name="nomeProduto" id="nomeProduto">

            <br>

            <label for="precoProduto" class="itemForm-produto">Preço</label>
            <input type="decimal" name="precoProduto" id="precoProduto">

            <br>

            <label for="descricaoProduto" class="itemForm-produto">Descrição</label>
            <textarea name="descricaoProduto" id="descricaoProduto" rows="5" ></textarea>

            <br>
            
            <input type="submit" name="cadastrarProduto" value="Cadastrar Produto">

        </form>
</div>

</body>

<?php require 'footer.php' ?>