<?php

function logar() {

  if(isset($_POST['logar'])) {

      require ('..\..\infra\connection.php');
      require ('..\model\usuario\classUsuario.php');

      $usuario = new Usuario();
    
      $login = addslashes($_POST['login']);
      $senha = addslashes($_POST['senha']);

      $user = $usuario->loginUsuario($login, $senha);

      $senhaBanco = $usuario->retornaSenhaUsuario($login);
      
      $senhaCripto = password_verify($senha, $senhaBanco[0]);


      if($user == true && $senhaCripto == true) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senhaBanco[0];
        $nome = $usuario->getNomeUsuario($login);
        $_SESSION['nome'] = $nome;
        $permissao = $usuario->getPermissaoUsuario($login);
        $_SESSION['permissao'] = $permissao;
        $id = $usuario->getIdUsuario($login);
        $_SESSION['idUsuario'] = $id;
        
        header('location: ..\control\redirecionamento.php?action=Home');
      } else {
        header('location: ..\control\redirecionamento.php?action=Home&erro=senha');
      }
  }
}

function deslogar() {

  require ('..\..\infra\connection.php');
  require ('..\model\usuario\classUsuario.php');

  $usuario = new Usuario();
  $usuario->deslogarUsuario();
  
  header('location: ..\control\redirecionamento.php?action=Home');
}

function cadastrar() {

  if(isset($_POST['cadastrar'])) {

    include ('..\..\infra\connection.php');
    include ('..\model\usuario\classUsuario.php');

    $usuario = new Usuario();

    $login = trim(strip_tags($_POST['login']));
    //$nome = trim(strip_tags($_POST['nome']));
    $senha = trim(strip_tags($_POST['senha']));
    $senha_repetida = trim(strip_tags($_POST['senha_repetida']));
    if ($senha === $senha_repetida) {
        
      $consulta = $usuario->pesquisaUsuario($login);

      if ($consulta == false) {

        header('location: ../control/redirecionamento.php?action=CadastroUsuario&repetido=senha');
      
      } else {
        $permissao = "Usuario";

        $valor = ['cost' => 8];
        $hash = password_hash($senha, PASSWORD_BCRYPT, $valor);

        $dataCadastro = $usuario->calculoHorario();
        
        $insere = $usuario->cadastraUsuario($login,$hash,$permissao,$dataCadastro);
        
        if ($insere == true) {
        
          header('location: ../control/redirecionamento.php?action=CadastroUsuario&success=cadastrado');
           
        }
      }
    } else {

      header('location: ../control/redirecionamento.php?action=CadastroUsuario&erro=senha');
      
    }
  }
}

//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

  call_user_func($_GET['action']);

} else {

  header('location: ..\index.php');

}

//Edita o nome
function editarNome() {

  if(isset($_POST['editarNome'])) {
      
      require ('..\..\infra\connection.php');
      require ('..\model\usuario\classUsuario.php');

      session_start();
    
      $usuario = new Usuario();

      $nome = trim(addslashes($_POST['editarNomeNovo']));
      $loginPesquisa = $_SESSION['login'];

      $usuario->alteraNomeUsuario($nome,$loginPesquisa);
      
      header('location: ..\control\redirecionamento.php?action=Home');
      
  }
}

function editarSenha() {

  if(isset($_POST['editarSenha'])) {
      
    require ('..\..\infra\connection.php');
    require ('..\model\usuario\classUsuario.php');

    session_start();
  
    $usuario = new Usuario();

    $senha = trim(addslashes($_POST['editarSenhaNova']));
    $loginPesquisa = $_SESSION['login'];

    $usuario->alteraSenhaUsuario($senha,$loginPesquisa);
    
    header('location: ..\control\redirecionamento.php?action=Home');
    
}
}


?>