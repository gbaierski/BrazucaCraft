<?php require "../view/header.php" ?> 


<div id="backgroundLoja">

    <div id="botaoNovoProdutoDiv">
      <a href="../control/redirecionamento.php?action=CadastroProdutos">
        <button id="botaoNovoProduto">
          <img src="../../assets/img/icons/novo.png" id="icon-NovoProduto">
          Novo Produto
        </button>
      </a>
    </div>
    <div id="produtos-loja">
        <div id="tituloLoja">LOJA</div>
        <div class="carrinhocompras">
             Você Tem <?php     
             print_r($_SESSION['produtos']);
             /* if( $_SESSION['Produtos']){ 
                $carrinho = count($_SESSION['Produtos']);
               echo $carrinho;
               }else{ 
                 echo "0";
                 } */?> itens no carrinho <a href="../control/carrinhoCompras.php?action=removercarrinho">Limpar SESSION</a>
        </div>
    <?php foreach ($produtos as $produto) { ?>

    <div class="div-produto">
        <img class="imagem-produto" src="../../assets/img/vips/<?=$produto['imagemProduto']?>">
        <div class="atributos-produto">
            <div class="nome-produto"><?= $produto['nomeProduto'] ?></div>
            <div class="preco-produto"><?= $produto['precoProduto'] ?></div>
            <div class="descricao-produto"><?=  $produto['descricaoProduto'] ?></div>
        </div>

        <a href="../control/carrinhoCompras.php?action=adicionarnocarrinho&ai_produto=<?= $produto['ai_produto']?>"><button class="produto-comprar">Adicionar No Carrinho</button></a>

        <div class="botoesAdmin-produto">
        <a href="../control/redirecionamento.php?action=EditarProduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-editar">Editar</button></a>
            <a href="../control/produtos.php?action=deletarProduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-deletar">Deletar</button></a>
        </div>
    </div>

    <?php } ?>
    </div>
</div>

<div class="clear"></div>
<?php require '../view/footer.php'; ?>
   