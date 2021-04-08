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
        $nome = $usuario->getNomeUsuario($login);
        $_SESSION['nome'] = $nome;
        $permissao = $usuario->getPermissaoUsuario($login);
        $_SESSION['permissao'] = $permissao;
        $id = $usuario->getIdUsuario($login);
        $_SESSION['idUsuario'] = $id;
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
    $nome = trim(strip_tags($_POST['nome']));
    $senha = trim(strip_tags($_POST['senha']));
    $senha_repetida = trim(strip_tags($_POST['senha_repetida']));

    if ($senha === $senha_repetida) {
        
      $consulta = $usuario->pesquisaUsuario($login);

      if ($consulta == false) {

        header('location: ..\view\usuario\cadastroUsuario.php?repetido=senha');
      
      } else {
        $permissao = "Usuario";
        $insere = $usuario->cadastraUsuario($login,$senha,$nome,$permissao);
        
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

//Edita o nome
function editarNome() {

  if(isset($_POST['editarNome'])) {

      require ('..\..\infra\connection.php');
      require ('..\model\usuario\classUsuario.php');
    
      $usuario = new Usuario();

      $nome = addslashes($_POST['editarNome']);

      $usuario->alteraNomeUsuario($nome);
      print($nome);
      if($user == True) {
        header('location: ..\view\usuario\perfil.php');
      } else {
        header('location: ..\view\home.php');
      }

      
  }
}


?>