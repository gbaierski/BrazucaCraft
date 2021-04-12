<?php 

function Home(){

    $nomePagina = "Home | BrazucaCraft";
    require '../view/home.php';
}
function CadastroProdutos(){
    
    $nomePagina = "Casdatro Produtos | BrazucaCraft";
    $nomeForm = "Cadastro de Produto";
    $edicao = false;
    require '../view/loja/cadastroProdutos.php';
}

function EditarProduto(){

    $idProduto = $_GET['ai_produto'];
    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegaProduto($idProduto);
    //Consulta no Banco Fim
    $nomePagina = "Editar Produto | BrazucaCraft";
    $nomeForm = "Edição do Produto";
    $edicao = true;
    require '../view/loja/cadastroProdutos.php';
}

function Loja(){

    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegarProdutos();
    //Consulta no Banco Fim

    $nomePagina = "Loja | BrazucaCraft";
    require ('../view/loja/loja.php');

}
function CadastroUsuario(){

    $nomePagina = "Cadastro Usuario | BrazucaCraft";
    require '../view/usuario/cadastroUsuario.php';
}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    Home();
  
  }