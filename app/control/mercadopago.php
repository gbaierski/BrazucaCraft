<?php 

function comprarProduto(){
      
      $ai_produto = $_GET['ai_produto'];
     //Consulta no Banco
      require ('..\model\produto\produto.php');          
      $produto = new Produto;    
      $produtos = $produto->retornaProduto($ai_produto);
      //Consulta no Banco Fim
     // SDK de Mercado Pago
      require __DIR__ .  '../../../lib/vendor/autoload.php';

      // Configura credenciais
      MercadoPago\SDK::setAccessToken('TEST-7115451492696996-042413-6e820754ad636759912d0db3e34f5779-556131647');

      // Cria um objeto de preferência
      $preference = new MercadoPago\Preference();

      // Cria um item na preferência
      $item = new MercadoPago\Item();
      $item->title = $produtos['nomeProduto'];
      $item->quantity = 1;
      $item->unit_price = $produtos['precoProduto'];
      $preference->items = array($item);
      $preference->save();
      $preference->back_urls = array(
        "success" => "../control/redirecionamento.php?action=Home"
    );
     $preference->auto_return = "approved";

      require 'teste.php';
}


//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    Home();
  
  }



