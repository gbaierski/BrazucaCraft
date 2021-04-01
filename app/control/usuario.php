<?php

function logar() {

  if(isset($_POST['logar'])) {

      require ('..\..\infra\connection.php');
      require ('..\model\usuario\classUsuario.php');
    
      $usuario = new Usuario();
    
      $login = addslashes($_POST['login']);
      $senha = addslashes($_POST['senha']);
    
      $user = $usuario->loginUsuario($login, $senha);
    
      if($user == true) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['permissao'] = $permissao;
        header('location: ..\view\home.php');
      } else {
        header('location: ..\view\home.php?erro=senha');
      }
  }
}

function deslogar() {

  require ('..\..\infra\connection.php');
  require ('..\model\usuario\classUsuario.php');

  $usuario = new Usuario();
  $usuario->deslogarUsuario();
  
  header('location: ..\view\home.php');
}

function cadastrar() {

  if(isset($_POST['cadastrar'])) {

    include ('..\..\infra\connection.php');
    include ('..\model\usuario\classUsuario.php');

    $usuario = new Usuario();

    $login = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));
    $senha_repetida = trim(strip_tags($_POST['senha_repetida']));

    if ($senha === $senha_repetida) {
        
      $consulta = $usuario->pesquisaUsuario($login);

      if ($consulta == false) {

        header('location: ..\view\usuario\cadastroUsuario.php?repetido=senha');
      
      } else {
        
        $insere = $usuario->cadastraUsuario($login,$senha);
        
        if ($insere == true) {
        
          header('location: ..\view\usuario\cadastroUsuario.php?success=cadastrado');
           
        }
      }
    } else {

      header('location: ..\view\usuario\cadastroUsuario.php?erro=senha');
      
    }
  }
}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

  call_user_func($_GET['action']);

} else {

  header('location: ..\view\home.php');

}

?>