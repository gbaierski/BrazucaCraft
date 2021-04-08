<?php

if ( session_status() !== PHP_SESSION_ACTIVE ) {
  session_start();  
}

require ('..\..\..\infra\connection.php');
require ('..\..\model\usuario\classUsuario.php');

$usuario = new Usuario();
$usuario->DeclaraUsuario();

print($usuario->getNome() . " " . $usuario->getSenha() . " " . $usuario->getLogin(). " " . $usuario->getpermissao());


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