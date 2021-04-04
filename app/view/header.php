<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="pt-br" class="no-js" content="pt-br">

	<head>
		<title> <?= $nomePagina ?> </title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
    </head>
    <body id="bodyID">
      <button id="botaoFecharMenu">fechar</button>
        <section id="secondBody">
          <header class="header">
            <nav class="nav-desktop">

              <a href="../control/redirecionamento.php?action=index" id="link-brazuca-menu">
                <p class="header-texto" id="texto-brazuca"> BRAZUCA <br> CRAFT</p>
              </a>

              <div class="opcao-menu">
                <a href="../control/redirecionamento.php?action=index">
                  <button class="botao-menu" id="botao-home">
                    <img src="../../assets/img/icons/home.png" class="icon-linkMenu">
                    <div class="texto-linkMenu">HOME</div>
                  </button>
                </a>
              </div>

              <div class="opcao-menu">
                <a href="">
                  <button class="botao-menu" id="botao-blog">
                    <img src="../../assets/img/icons/blog.png" class="icon-linkMenu">
                    <div class="texto-linkMenu"> BLOG </div>
                  </button>
                </a>
              </div>

              <div class="opcao-menu">
                <a href="../control/redirecionamento.php?action=paginacadastroprodutos">
                  <button class="botao-menu" id="botao-sobre">
                    <img src="../../assets/img/icons/sobre.png" class="icon-linkMenu">
                    <div class="texto-linkMenu"> SOBRE </div>
                  </button>
                </a>
              </div>

              <div class="opcao-menu">
                <a href="">
                  <button class="botao-menu" id="botao-ajuda">
                    <img src="../../assets/img/icons/ajuda.png" class="icon-linkMenu">
                    <div class="texto-linkMenu"> AJUDA </div>
                  </button>
                </a>
              </div>

              <div id="div-loja">
                <a href="../control/redirecionamento.php?action=paginaLoja" >
                  <button class="botao-menu" id="botao-loja">
                    <img src="../../assets/img/icons/loja.png" class="icon-linkMenu">
                    <div class="texto-linkMenu"> LOJA </div>
                  </button>
                </a>
              </div>
                                            <!-- id="head-player" -->
              <?= isset($_SESSION['login']) ?'<div  class="dropdown">
                                                <button onclick="abrirDropdown()" id="head-player" class="dropbtn"></button>
                                                <div id="myDropdown" class="dropdown-content">
                                                  <a href="#">Link 1</a>
                                                  <a href="#">Link 2</a>
                                                  <a href="../control/usuario.php?action=deslogar">Deslogar</a>
                                                </div>
                                              </div>' : '<button id="botao-login">LOGIN</button>'; ?>
            </nav>
            <nav class="nav-mobile">
              <div class="opcao-menuMobile">
                  <button class="botao-menuMobile" id="botao-homeMobile" onclick="menuMobile()">
                    <img src="../../assets/img/icons/home.png" class="icon-linkMenuMobile">
                    <div class="texto-linkMenuMobile">HOME</div>
                  </button>
              </div>

              <a href="../control/redirecionamento.php?action=index" id="link-brazuca-menu">
                <p class="header-texto" id="texto-brazuca"> BRAZUCA <br> CRAFT</p>
              </a>

              <div class="opcao-menuMobile">
                <a href="">
                  <button class="botao-menuMobile" id="botao-blogMobile">
                    <img src="../../assets/img/icons/blog.png" class="icon-linkMenuMobile">
                    <div class="texto-linkMenuMobile"> BLOG </div>
                  </button>
                </a>
              </div>

              <div class="opcao-menuMobile">
                <a href="../control/redirecionamento.php?action=paginacadastroprodutos">
                  <button class="botao-menuMobile" id="botao-sobreMobile">
                    <img src="../../assets/img/icons/sobre.png" class="icon-linkMenuMobile">
                    <div class="texto-linkMenuMobile"> SOBRE </div>
                  </button>
                </a>
              </div>

              <div class="opcao-menuMobile">
                <a href="">
                  <button class="botao-menuMobile" id="botao-ajudaMobile">
                    <img src="../../assets/img/icons/ajuda.png" class="icon-linkMenuMobile">
                    <div class="texto-linkMenuMobile"> AJUDA </div>
                  </button>
                </a>
              </div>

              <div id="div-loja">
                <a href="../control/redirecionamento.php?action=paginaLoja" >
                  <button class="botao-menuMobile" id="botao-lojaMobile">
                    <img src="../../assets/img/icons/loja.png" class="icon-linkMenuMobile">
                    <div class="texto-linkMenuMobile"> LOJA </div>
                  </button>
                </a>
              </div>
                                            <!-- id="head-player" -->
              <?= isset($_SESSION['login']) ?'<div  class="dropdown">
                                                <button onclick="abrirDropdown()" id="head-player" class="dropbtn"></button>
                                                <div id="myDropdown" class="dropdown-content">
                                                  <a href="#">Link 1</a>
                                                  <a href="#">Link 2</a>
                                                  <a href="../control/usuario.php?action=deslogar">Deslogar</a>
                                                </div>
                                              </div>' : '<button id="botao-login">LOGIN</button>'; ?>
            </nav>

            <div id="modal" class="modal">

              <div class="modalConteudo">
                <span class="fechar"><button class="botao-fechar"></button></span>
                <h2 id="tituloModal">Login</h2>
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
            
            <!-- Scripts -->
      
            <!--- 
            Esses dois scripts servem para puxar as bibliotecas de Jquery e bootstrap do google, no momento são necessarias para o funcionamento do modal.
            Obs: Não está sendo usada nenhuma classe bootstrap porém a biblioteca é necessaria pro Jquery conseguir funcionar.
            --->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="../view/home.js"></script>
            <script src="../view/header.js"></script>
          </header>
