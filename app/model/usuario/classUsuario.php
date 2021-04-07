<?php

class Usuario {
    public $conexao;
    
    public function __construct() {
        $this->conexao = new Connection();  
    }

    //funções Principais

    //função que verifica se existe no banco algum usuário com mesmo login
    public function pesquisaUsuario($login) {

        $unico = "SELECT * FROM usuarios WHERE usuarioLogin = '$login'";        
        $exec = mysqli_query($this->conexao->getConnection(), $unico);

        if(mysqli_num_rows($exec) > 0) {
            return false;
        } else {
            return true;
        }
    }

    //função que cadastra o usuário no banco
    public function cadastraUsuario($login,$senha) {

        $sql = "INSERT INTO usuarios (usuarioLogin, usuarioSenha) VALUES ('$login','$senha')";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);

        if(mysqli_affected_rows($this->conexao->getConnection()) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //função que loga o usuario
    public function loginUsuario($login, $senha) {
        
        $sql = "SELECT * FROM usuarios WHERE usuarioLogin = '$login' AND usuarioSenha = '$senha'";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);
  
        if(mysqli_num_rows($executa) > 0) {
          return true;
        } else {
          return false;
        }
    }

    //função que desloga o usuário
    public function deslogarUsuario() {

        session_start();
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
    }

    //Funções Secundarias

    //função que Pega o nome do usuario
    function getNomeUsuario($login) {
        $getNome = "SELECT nomeUsuario FROM usuarios WHERE usuarioLogin = '$login'";        
        $getNomeExec = mysqli_query($this->conexao->getConnection(), $getNome);

        if(mysqli_num_rows($getNomeExec) != 0 ) {
        while( $row = mysqli_fetch_array($getNomeExec) ){
            $usuario = $row; 
        }
        return $usuario;
        } else {
        return false;
        }

    }
    //função que Pega o Id do Usuario
    function getIdUsuario($login) {
        $getId = "SELECT idUsuario FROM usuarios WHERE usuarioLogin = '$login'";        
        $getIdExec = mysqli_query($this->conexao->getConnection(), $getId);

        if(mysqli_num_rows($getIdExec) != 0 ) {
        while( $row = mysqli_fetch_array($getIdExec) ){
            $usuario = $row; 
        }
        return $usuario;
        } else {
        return false;
        }

    }
    //função que Pega a senha do usuario
    function getSenhaUsuario($login) {
        $getSenha = "SELECT usuarioSenha FROM usuarios WHERE usuarioLogin = '$login'";        
        $getSenhaExec = mysqli_query($this->conexao->getConnection(), $getSenha);

        if(mysqli_num_rows($getSenhaExec) != 0 ) {
        while( $row = mysqli_fetch_array($getSenhaExec) ){
            $usuario = $row; 
        }
        return $usuario;
        } else {
        return false;
        }

    }
    //função que Pega o nivel de permissão do usuario
    function getPermissaoUsuario($login) {
        $getPermissao = "SELECT permissao FROM usuarios WHERE usuarioLogin = '$login'";        
        $getPermissaoExec = mysqli_query($this->conexao->getConnection(), $getPermissao);

        if(mysqli_num_rows($getPermissaoExec) != 0 ) {
        while( $row = mysqli_fetch_array($getPermissaoExec) ){
            $usuario = $row; 
        }
        return $usuario;
        } else {
        return false;
        }

    }

    //função que altera o banco o nome do usuario
    /*Obs: Como essa é uma função q ultilza um form, diferente das outras que puxei a função direto na pagina do perfil, 
    nesta achei mais organizado passar os dados para uma função mãe que está no usuario.php, seguindo o padrão das outras
    funções*/
    function setNomeUsuario($nome){
            $login = $_SESSION['login'];
            $setNomeUsuario = "UPDATE usuarios SET nomeUsuario = '$nome' WHERE usuarioLogin = $login";
            $executa = mysqli_query($this->conexao->getConnection(), $setNomeUsuario);
        
    }

    
    


}

?>