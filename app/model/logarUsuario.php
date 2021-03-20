<?php

if($_POST) {
    include ('..\..\infra\connection.php');
    include ('classUsuario.php');
  
    $usuario = new Usuario();
  
    $login = addslashes($_POST['login']);
    $senha = addslashes($_POST['senha']);
  
    $user = $usuario->loginUsuario($login, $senha);
  
    if($user == true) {
      session_start();
      $_SESSION['login'] = $login;
      $_SESSION['senha'] = $senha;
      header('location:..\view\home.php');
    } else {
      header('location:..\view\paginaLogin.php?erro=senha');
    }
  
  }

?>