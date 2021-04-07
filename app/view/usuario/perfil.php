<?php

if ( session_status() !== PHP_SESSION_ACTIVE )
{
   session_start();  
}

require ('..\..\..\infra\connection.php');
require ('..\..\model\usuario\classUsuario.php');

//Essa é a forma mais simplificada que achei para chamar as funções, mas acredito que não irá atrapalhar ou deixar o codigo confuso

$usuario = new Usuario();
$login = $_SESSION['login'];
$nome = $usuario->getNomeUsuario($login);
$id = $usuario->getIdUsuario($login);
$senha = $usuario->getSenhaUsuario($login);
$permissao = $usuario->getPermissaoUsuario($login);

print($nome[0] . " " . $id[0] . " " . $login . " " . $senha[0] . " " . $permissao[0]);


?>

<!---  Essa parte é um teste do editar para o nome do Usuario, ainda não está funcionando mas ja está até q bem encaminhado  --->

<html>

<body>

<form action="..\..\control\usuario.php?action=editarNome" method="post">
      <div>
        <label for="nome">editarNome</label>
        <input type="text" id="nome" name="nome">
      </div>

      <input type="submit" name="editarNome" value="editarNome">


</form>

</body>

</html>