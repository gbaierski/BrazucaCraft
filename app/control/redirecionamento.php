<?php 

function index(){

    $nomePagina = "Home | BrazucaCraft";
    require '../view/home.php';
}
function paginaCadastroprodutos(){
    
    $nomePagina = "Casdatro Produtos | BrazucaCraft";
    $nomeForm = "Cadastro de Produto";
    require '../view/loja/cadastroProdutos.php';
}

function paginaEditarproduto(){

    $ai_produto = $_GET['ai_produto'];
    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->retornaProduto($ai_produto);
    //Consulta no Banco Fim
    $nomePagina = "Editar Produto | BrazucaCraft";
    $nomeForm = "Edição do Produto";
    require '../view/loja/cadastroProdutos.php';
}

function paginaLoja(){

    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegarProdutos();
    //Consulta no Banco Fim

    $nomePagina = "Loja | BrazucaCraft";
    require ('../view/loja/loja.php');

}



//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }