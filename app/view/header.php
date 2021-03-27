<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="../../assets/css/geral.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/home.css"/>
		
    </head>

    <body>

        <header class="header">
			<nav class="nav-menu">

				<a href="" id="link-brazuca-menu">
				<p class="header-texto" id="texto-brazuca"> BRAZUCA <br> CRAFT</p>
				</a>

				<a href=""><div class="opcao-menu"><button class="botao-menu" id="botao-home"><img src="../../assets/img/icons/home.png" class="icon-linkMenu">HOME</button></a></div>
				<div class="opcao-menu"><a href=""><button class="botao-menu" id="botao-forum"><img src="../../assets/img/icons/forum.png" class="icon-linkMenu">FÓRUM</button></a></div>
				<div class="opcao-menu"><a href=""><button class="botao-menu" id="botao-sobre"><img src="../../assets/img/icons/sobre.png" class="icon-linkMenu">SOBRE</button></a></div>
				<div class="opcao-menu"><a href=""><button class="botao-menu" id="botao-ajuda"><img src="../../assets/img/icons/ajuda.png" class="icon-linkMenu">AJUDA</button></a></div>
				
				<div id="div-loja"><a href="" ><button class="botao-menu" id="botao-loja"><img src="../../assets/img/icons/loja.png" class="icon-linkMenu">LOJA</button></a></div>
				<?= isset($_SESSION['login']) ? '<a href="../control/usuario.php?action=deslogar"><div id="head-player"></div></a>' : '<button class="botao-menu" id="botaoModal">LOGIN</button></a>'; ?>
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

      <input type="submit" name="logar" value="Logar">

    </form>

    <a href="paginaCadastro.php">Cadastre-se</a>

    </div>

  </div>

</div>

<script>

var modal = document.getElementById("modal");

var btn = document.getElementById("botaoModal");

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