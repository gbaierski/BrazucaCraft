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
          $aux = $_SESSION['produtos'];
          $ai_produto = $aux[6];
          print_r( $ai_produto);     
          /*Consulta no Banco
          require ('..\model\produto\produto.php');          
          $produto = new Produto;    
          $produtos = $produto->retornaProduto($ai_produto);
          Consulta no Banco Fim */
          //if(isset( $_SESSION['produtos'])){ 
          //print_r($_SESSION['produtos']) ;
          //}?>      
        </div>

        <br><br><br><br><br>




<?php require '../view/footer.php'; ?>