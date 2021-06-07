<?php 
require "../view/header.php"; 
?>
<br><br><br><br><br><br><br><br><br><br>
<div class="carrinhocompras">
             Você Tem <?php     
            
             if(isset( $_SESSION['produtos'])){ 
                $carrinho = count($_SESSION['produtos']);
               echo $carrinho;
               }else{ 
                 echo "0";
                 } ?> itens no carrinho <a href="../control/carrinhoCompras.php?action=removercarrinho">Limpar SESSION</a>
        </div>
         <br><br><br><br><br><br><br>
        <div class="carrinhocompras">
          <?php
          //$aux = $_SESSION['produtos'];
          //$ai_produto = $aux[6];
         // print_r( $_SESSION['produtos']); 
          foreach ($_SESSION['produtos'] as $item) {

            print_r($item);
            echo '<a href="../control/mercadopago.php?action=comprarProduto&ai_produto='.$item['idProduto'].'"><button>Comprar este item apenas</button></a>';
            echo '</br>';
        }    
          /*Consulta no Banco
          require ('..\model\produto\produto.php');          
          $produto = new Produto;    
          $produtos = $produto->retornaProduto($ai_produto);
          Consulta no Banco Fim */
          //if(isset( $_SESSION['produtos'])){ 
          //print_r($_SESSION['produtos']) ;
          //}?> 
          <br>
          <p>Preço Total 
          <?php foreach ($_SESSION['produtos'] as $carrinhoitem ) {

            echo $carrinhoitem['PrecoProduto'] + $carrinhoitem['PrecoProduto'];

          } ?></p>
          
          <a href="../control/mercadopago.php?action=comprarProduto&ai_produto=<?=$item['idProduto']?>"><button>Comprar o Carrinho todo</button></a>     
        </div>

        <br><br><br><br><br>




<?php require '../view/footer.php'; ?>