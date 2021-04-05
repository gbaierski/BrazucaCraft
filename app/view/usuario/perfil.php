<?php

if ( session_status() !== PHP_SESSION_ACTIVE )
{
   session_start();  
}
require ('..\..\..\infra\connection.php');
require ('..\..\model\usuario\classUsuario.php');

$usuario = new Usuario();
$login = $_SESSION['login'];
$user = $usuario->getInformacoesUsuario($login);

print($user[0]);


?>