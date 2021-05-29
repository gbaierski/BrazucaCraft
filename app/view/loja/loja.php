<?php 
require "../view/header.php"; 
require ('..\model\usuario\classUsuario.php');
$usuario = new Usuario();
$usuario->DeclaraUsuario();
?> 


<div id="backgroundLoja">
  <?php if($usuario->getPermissao() == "Administrador") { ?>
    <div id="botaoNovoProdutoDiv">
      <a href="../control/redirecionamento.php?action=CadastroProdutos">
        <button id="botaoNovoProduto"  class="azul">
          <img src="../../assets/img/icons/novo.png" id="icon-NovoProduto">
          <div id="textoNovoProduto">Novo Produto</div>
        </button>
      </a>
    </div>
    <?php } ?>
    <div id="produtos-loja">
        <div id="tituloLoja">LOJA</div>
        <div class="carrinhocompras">
            <?php
             if(isset( $_SESSION['produtos'])){ 
                $carrinho = count($_SESSION['produtos']);
               echo $carrinho;
               }else{ 
                 echo "0";
                 } ?> itens no carrinho <a href="../control/redirecionamento.php?action=CarrinhoCompras">Ver no Carrinho de Compras</a>
        </div>
    <?php foreach ($produtos as $produto) { ?>

    <div class="div-produto">
        <img class="imagem-produto" src="../../assets/img/vips/<?=$produto['imagemProduto']?>">
        <div class="atributos-produto">
            <div class="nome-produto"><?= $produto['nomeProduto'] ?></div>
            <div class="preco-produto"><?= $produto['precoProduto'] ?></div>
            <div class="descricao-produto"><?=  $produto['descricaoProduto'] ?></div>
        </div>

        
        <?php if($usuario->getPermissao() == "Administrador") { ?>

        <div class="botoesAdmin-produto">
          <a href="../control/redirecionamento.php?action=EditarProduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-editar verde">Editar</button></a>
          <a href="../control/produtos.php?action=deletarProduto&ai_produto=<?= $produto['ai_produto']?>"><button  class="produto-deletar vermelho">Deletar</button></a>
        </div>

        <?php } else { ?>
          <button class="produto-comprar verde">Comprar</button>
          <a href="../control/carrinhoCompras.php?action=adicionarnocarrinho&ai_produto=<?= $produto['ai_produto']?>"><button class="produto-comprar">Adicionar No Carrinho</button></a>
        <?php } ?>
    </div>

    <?php } ?>
    </div>
</div>

<div class="clear"></div>

<?php require '../view/footer.php'; ?>
   