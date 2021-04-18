<?php 
require ('..\model\produto\produto.php');

function cadastroProduto(){

    
   $nomeProduto = trim(strip_tags($_POST['nomeProduto']));
    $precoProduto = trim(strip_tags($_POST['precoProduto']));
    $decricaoProduto = trim(strip_tags($_POST['descricaoProduto']));
    /////Função de Upload de Imagem 

    if(isset($_FILES['imagemProduto']['name']) && $_FILES["imagemProduto"]["error"] == 0)
    {
    
      $arquivo_tmp = $_FILES['imagemProduto']['tmp_name'];
      $nome = $_FILES['imagemProduto']['name'];
      
    
      // Pega a extensao
      $extensao = strrchr($nome, '.');
    
      // Converte a extensao para mimusculo
      $extensao = strtolower($extensao);
    
      // Somente imagens, .jpg;.jpeg;.gif;.png
      // Aqui eu enfilero as extesões permitidas e separo por ';'
      // Isso server apenas para eu poder pesquisar dentro desta String
      if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
      {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . '.' . $extensao;
        
        // Concatena a pasta com o nome
        $destino = '../../assets/img/vips/' . $novoNome; 
        
        // tenta mover o arquivo para o destino
        if( @move_uploaded_file( $arquivo_tmp, $destino  ))
        {
          echo"AMEM";
        }
        else
          echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
      }
      else
        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
    }
    else
    {
      echo "Você não enviou nenhum arquivo!";
    }

     /////Função de Upload de Imagem  Fim
    
    $imagemProduto = $novoNome;

   

   $produto = new Produto();

    
    $cadastra = $produto->cadastraProdutos($nomeProduto,$precoProduto,$decricaoProduto,$imagemProduto);

   header('location: redirecionamento.php?action=Loja');
  

}

function deletarProduto(){
    $idProduto = $_GET['ai_produto'];
    $produto = new Produto();
    $exclui = $produto->deletaProduto($idProduto);
    header('location: redirecionamento.php?action=Loja');
}

function editarProduto(){
  $idProduto = $_GET['ai_produto'];
  $nomeProduto = trim(strip_tags($_POST['nomeProduto']));
  $precoProduto = trim(strip_tags($_POST['precoProduto']));
  $descricaoProduto = trim(strip_tags($_POST['descricaoProduto']));
  /////Função de Upload de Imagem 

  if(isset($_FILES['imagemProduto']['name']) && $_FILES["imagemProduto"]["error"] == 0)
  {
  
    $arquivo_tmp = $_FILES['imagemProduto']['tmp_name'];
    $nome = $_FILES['imagemProduto']['name'];
    
  
    // Pega a extensao
    $extensao = strrchr($nome, '.');
  
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
  
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfilero as extesões permitidas e separo por ';'
    // Isso server apenas para eu poder pesquisar dentro desta String
    if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
    {
      // Cria um nome único para esta imagem
      // Evita que duplique as imagens no servidor.
      $novoNome = md5(microtime()) . '.' . $extensao;
      
      // Concatena a pasta com o nome
      $destino = '../../assets/img/vips/' . $novoNome; 
      
      // tenta mover o arquivo para o destino
      if( @move_uploaded_file( $arquivo_tmp, $destino  ))
      {
        echo"AMEM";
      }
      else
        echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
    }
    else
      echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
  }
  else
  {
    echo "Você não enviou nenhum arquivo!";
  }

   /////Função de Upload de Imagem  Fim

   $imagemProduto = $novoNome;
  
  $produto = new Produto();
  $exclui = $produto->buscaEditaProduto($idProduto, $nomeProduto, $precoProduto , $descricaoProduto , $imagemProduto);
  header('location: redirecionamento.php?action=Loja');
}

function uploadImagens(){

  if(isset($_FILES['imagemProduto']['name']) && $_FILES["imagemProduto"]["error"] == 0)
    {
    
      $arquivo_tmp = $_FILES['imagemProduto']['tmp_name'];
      $nome = $_FILES['imagemProduto']['name'];
      
    
      // Pega a extensao
      $extensao = strrchr($nome, '.');
    
      // Converte a extensao para mimusculo
      $extensao = strtolower($extensao);
    
      // Somente imagens, .jpg;.jpeg;.gif;.png
      // Aqui eu enfilero as extesões permitidas e separo por ';'
      // Isso server apenas para eu poder pesquisar dentro desta String
      if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
      {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . '.' . $extensao;
        
        // Concatena a pasta com o nome
        $destino = '../../assets/img/vips/' . $novoNome; 
        
        // tenta mover o arquivo para o destino
        if( @move_uploaded_file( $arquivo_tmp, $destino  ))
        {
          return $novoNome;
        }
        else
          echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
      }
      else
        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
    }
    else
    {
      echo "Você não enviou nenhum arquivo!";
    }

}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: ..\view\home.php');
  
  }