<?php 


//Seção Home e Header
function Home(){

    $nomePagina = "Home | BrazucaCraft";
    require '../view/home.php';
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





//Seção Loja

function homeLoja(){

    $nomePagina = "Loja | BrazucaCraft";
    require ('../view/loja/homeloja.php');

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

function paginaVips () {

    $nomePagina = "Vips | BrazucaCraft";
    require '../view/loja/paginaVips.php';
}

function paginaCosmeticos () {

    $nomePagina = "Cosméticos | BrazucaCraft";
    require '../view/loja/paginaCosmeticos.php';
}

function paginaMoedas () {

    $nomePagina = "Moedas | BrazucaCraft";
    require '../view/loja/paginaMoedas.php';
}

function paginaBoosters () {

    $nomePagina = "Boosters | BrazucaCraft";
    require '../view/loja/paginaBoosters.php';
}

function paginaCaixas () {

    $nomePagina = "Caixas Misteriosas | BrazucaCraft";
    require '../view/loja/paginaCaixas.php';
}

function paginaParceiros () {

    $nomePagina = "Parceiros | BrazucaCraft";
    require '../view/loja/paginaParceiros.php';
}

function paginaUnban () {

    $nomePagina = "Unban | BrazucaCraft";
    require '../view/loja/paginaUnban.php';
}
//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    Home();
  
  }