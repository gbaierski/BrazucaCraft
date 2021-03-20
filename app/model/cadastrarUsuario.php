<?php

if(isset($_POST['cadastrar'])) {
    include ('..\..\infra\connection.php');
    include ('classUsuario.php');

    $cadastrar = new Usuario();

    $login = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));
    $senha_repetida = trim(strip_tags($_POST['senha_repetida']));

    if($senha === $senha_repetida) {
        
        $consulta = $cadastrar->usuarioUnico($login);

        print($consulta);

      if($consulta == false) {

        header('location: ..\view\paginaCadastro.php?repetido=senha');
      
      } else {
        
        $insere = $cadastrar->cadastraUsuario($login,$senha);
        
        print($insere . "a");
       
        if($insere == true) {
        
          header('location: ..\view\paginaCadastro.php?success=cadastrado');
         
          print("macaco");
        
        }
      }

    } else {
      header('location: ..\view\paginaCadastro.php?erro=senha');
    }
  }
  
?>