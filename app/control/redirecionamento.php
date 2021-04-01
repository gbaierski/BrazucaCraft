<?php 

function index(){

    $nomePagina = "Home | BrazucaCraft";
    require '../view/home.php';
}
function paginaCadastroprodutos(){
    
    $nomePagina = "Casdatro Produtos | BrazucaCraft";
    $nomeForm = "Cadastro de Produto";
    $edicao = false;
    require '../view/cadastroProdutos.php';
}

function paginaEditarproduto(){

    $idProduto = $_GET['ai_produto'];
    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegaProduto($idProduto);
    //Consulta no Banco Fim
    $nomePagina = "Editar Produto | BrazucaCraft";
    $nomeForm = "Edição do Produto";
    $edicao = true;
    require '../view/cadastroProdutos.php';
}

function paginaLoja(){

    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegarProdutos();
    //Consulta no Banco Fim

    $nomePagina = "Loja | BrazucaCraft";
   
    require ('../view/loja.php');

}



//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }