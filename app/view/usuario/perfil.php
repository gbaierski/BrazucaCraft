<?php

if ( session_status() !== PHP_SESSION_ACTIVE )
{
   session_start();  
}

require ('..\..\..\infra\connection.php');
require ('..\..\model\usuario\classUsuario.php');

$usuario = new Usuario();
$login = $_SESSION['login'];
$nome = $usuario->getNomeUsuario($login);
$id = $usuario->getIdUsuario($login);
$senha = $usuario->getSenhaUsuario($login);
$permissao = $usuario->getPermissaoUsuario($login);

print($nome[0] . " " . $id[0] . " " . $login . " " . $senha[0] . " " . $permissao[0]);


?>