<?php 



function Home(){

    $nomePagina = "Home | BrazucaCraft";
    require '../view/home.php';
}
function CadastroProdutos(){
    
    $nomePagina = "Casdatro Produtos | BrazucaCraft";
    $nomeForm = "Cadastro de Produto";
    require '../view/loja/cadastroProdutos.php';
}

function EditarProduto(){

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

function Loja(){

    //Consulta no Banco
    require ('..\model\produto\produto.php');          
    $produto = new Produto;    
    $produtos = $produto->pegarProdutos();
    //Consulta no Banco Fim

    $nomePagina = "Loja | BrazucaCraft";
    require ('../view/loja/loja.php');

}

function cadastroUsuario(){

    $nomePagina = "Cadastro | BrazucaCraft";
    require '../view/usuario/cadastroUsuario.php';
}

function manutencao () {

    $nomePagina = "Manutenção | BrazucaCraft";
    require '../view/telaManutencao.php';

}

function Perfil () {


    $nomePagina = " | BrazucaCraft";
    require '../view/perfil.php';

}

function CarrinhoCompras() {

    $nomePagina = " Carrinho | BrazucaCraft";
    require '../view/loja/paginacarrinhoCompras.php';

}


//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    Home();
  
  }