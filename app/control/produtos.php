<?php 
require ('..\model\usuario\produto.php');

function mostrarProdutos(){
    
    
    $produto = new Produto;

    
    $produtos = $produto->pegarProdutos();
    require ('../view/loja.php');
}


//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }