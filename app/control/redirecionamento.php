<?php 

function index(){

    $nomePagina = "Brazuca Craft";
    require '../view/home.php';
}
function paginaCadastroprodutos(){

    $nomePagina = "Casdatro Produtos - Brazuca craft";
    require '../view/cadastroProdutos.php';
}

function paginaLogin(){

    $nomePagina = "Login - Brazuca craft";
    require '../view/paginaLogin.php';
}

function paginaLoja(){

    //Consulta no Banco
    require ('..\model\usuario\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegarProdutos();
    //Consulta no Banco Fim

    $nomePagina = "Loja - Brazuca craft";
   
    require ('../view/loja.php');

}



//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }