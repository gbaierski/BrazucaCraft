<?php 
require ('..\model\usuario\produto.php');

function cadastroProduto(){

    
   $nomeProduto = trim(strip_tags($_POST['nomeProduto']));
    $precoProduto = trim(strip_tags($_POST['precoProduto']));
    $decricaoProduto = trim(strip_tags($_POST['descricaoProduto']));

    $produto = new Produto();

    
    $cadastra = $produto->cadastraProdutos($nomeProduto,$precoProduto,$decricaoProduto);

    header('location: redirecionamento.php?action=paginaLoja');
  

}

function deletarProduto(){
    $idProduto =  trim(strip_tags($_POST['ai_produto']));
    $produto = new Produto();
    $exclui = $produto->deletaProduto($idProduto);
    header('location: redirecionamento.php?action=paginaLoja');
}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }