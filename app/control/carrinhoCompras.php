<?php
if(session_id() == '') {
  session_start();
}
?> 
<?php 


function adicionarnocarrinho(){
    $ai_produto = $_GET['ai_produto'];
    //Consulta no Banco
      require ('..\model\produto\produto.php');          
      $produto = new Produto;    
      $produtos = $produto->retornaProduto($ai_produto);
    //Consulta no Banco Fim
    if ( isset($_SESSION['produtos']) && array_key_exists($produtos['ai_produto'], $_SESSION['produtos'])){
        $_SESSION['produtos'][$produtos['ai_produto']]['quantidade']+=1;
        header('location:../control/redirecionamento.php?action=Loja');
    }else{
     $_SESSION ['produtos'][$produtos['ai_produto']] = ['quantidade' => 1];
     header('location:../control/redirecionamento.php?action=Loja');
   
    }


}

function removercarrinho(){
  unset($_SESSION['produtos']);
  header('location: ../control/redirecionamento.php?action=CarrinhoCompras');
}


//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    Home();
  
  }



