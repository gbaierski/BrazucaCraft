<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	
	<head>
		<title><?=$nomePagina ?></title>
		<link rel="sortcut icon" href="../../assets/img/logo.png" type="image/x-icon" />;
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="../../assets/css/geral.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/home.css"/>
		<link rel="stylesheet" type="text/css" href="../../assets/css/footer.css"/>

		<!-- Bootstrap para fazer a pagina da loja dps tira quando vc for fazer Bersk -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
    </head>

    <body>
        <header class="header">
			<nav class="nav-menu">

				<a href="../control/redirecionamento.php?action=index" id="link-brazuca-menu">
				<p class="header-texto" id="texto-brazuca"> BRAZUCA <br> CRAFT</p>
				</a>

				<a href="../control/redirecionamento.php?action=index"><div class="opcao-menu"><button class="botao-menu" id="botao-home"><img src="../../assets/img/icons/home.png" class="icon-linkMenu">HOME</button></a></div>
				<div class="opcao-menu"><a href=""><button class="botao-menu" id="botao-forum"><img src="../../assets/img/icons/forum.png" class="icon-linkMenu">FÓRUM</button></a></div>
				<div class="opcao-menu"><a href="../control/redirecionamento.php?action=paginacadastroprodutos"><button class="botao-menu" id="botao-sobre"><img src="../../assets/img/icons/sobre.png" class="icon-linkMenu">SOBRE</button></a></div>
				<div class="opcao-menu"><a href=""><button class="botao-menu" id="botao-ajuda"><img src="../../assets/img/icons/ajuda.png" class="icon-linkMenu">AJUDA</button></a></div>
				
				<div id="div-loja"><a href="../control/redirecionamento.php?action=paginaLoja" ><button class="botao-menu" id="botao-loja"><img src="../../assets/img/icons/loja.png" class="icon-linkMenu">LOJA</button></a></div>
				<?= isset($_SESSION['login']) ? '<a href="../control/usuario.php?action=deslogar"><div id="head-player"></div></a>' : '<a href="../control/redirecionamento.php?action=paginaLogin"><button id="botao-login">LOGIN</button></a>'; ?>
			</nav>
        </header>