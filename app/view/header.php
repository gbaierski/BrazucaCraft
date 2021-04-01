<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="pt-br" class="no-js" content="pt-br">

	<head>
		<title> <?= $nomePagina ?> </title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">

		<!-- Css de páginas main -->
		
		<link rel="sortcut icon" href="../../assets/img/paginas/home/logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/geral.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/home.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/footer.css"/>

		<!-- Css das outras páginas -->

		<link rel="stylesheet" type="text/css" href="../../assets/css/loja.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/cadastroProdutos.css"/>

    <!-- Scripts -->
    
        <!--- Esses dois scripts servem para puxar as bibliotecas de Jquery e bootstrap do google, no momento são necessarias para o funcionamento do modal.
    Obs: Não está sendo usada nenhuma classe bootstrap porém a biblioteca é necessaria pro Jquery conseguir funcionar.
     --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../view/home.js"></script>


    </head>

    <body>
        <header class="header">
          <nav class="nav-menu">

            <a href="../control/redirecionamento.php?action=index" id="link-brazuca-menu">
              <p class="header-texto" id="texto-brazuca"> BRAZUCA <br> CRAFT</p>
            </a>

            <div class="opcao-menu">
              <a href="../control/redirecionamento.php?action=index">
                <button class="botao-menu" id="botao-home">
                  <img src="../../assets/img/icons/home.png" class="icon-linkMenu">
                  HOME
                </button>
              </a>
            </div>

            <div class="opcao-menu">
              <a href="">
                <button class="botao-menu" id="botao-forum">
                  <img src="../../assets/img/icons/forum.png" class="icon-linkMenu">
                  FÓRUM
                </button>
              </a>
            </div>

            <div class="opcao-menu">
              <a href="../control/redirecionamento.php?action=paginacadastroprodutos">
                <button class="botao-menu" id="botao-sobre">
                  <img src="../../assets/img/icons/sobre.png" class="icon-linkMenu">
                  SOBRE
                </button>
              </a>
            </div>

            <div class="opcao-menu">
              <a href="">
                <button class="botao-menu" id="botao-ajuda">
                  <img src="../../assets/img/icons/ajuda.png" class="icon-linkMenu">
                  AJUDA
                </button>
              </a>
            </div>

            <div id="div-loja">
              <a href="../control/redirecionamento.php?action=paginaLoja" >
                <button class="botao-menu" id="botao-loja">
                  <img src="../../assets/img/icons/loja.png" class="icon-linkMenu">
                  LOJA
                </button>
              </a>
            </div>

            <?= isset($_SESSION['login']) ? '<a href="../control/usuario.php?action=deslogar"><div id="head-player"></div></a>' : '<button id="botao-login">LOGIN</button>'; ?>
          </nav>

<div id="modal" class="modal">

  <div class="modalConteudo">
    <span class="fechar">&times;</span>
    <h2>Login</h2>
  <hr>
    <form action="..\control\usuario.php?action=logar" method="post">

      <div>
        <label for="login">Login</label>
        <input type="text" id="login" name="login">
      </div>

      <div>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha">
      </div>

<?php
  if (isset($_GET['erro'])) {

    echo '<h>Senha/Usuario incorretos</h1>';

    echo "<script>
      $(document).ready(function(){
        $('#modal').modal('show');
      }); </script>";
  }
?>

      <input type="submit" name="logar" value="Logar">

    </form>

    <a href="../view/usuario/cadastroUsuario.php">Cadastre-se</a>

    </div>

  </div>

</div>

<script>

var modal = document.getElementById("modal");

var btn = document.getElementById("botao-login");

var span = document.getElementsByClassName("fechar")[0];

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
   }
  }
  
</script>

      </header>
