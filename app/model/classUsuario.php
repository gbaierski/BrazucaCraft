<?php

class Usuario {
    public $conexao;
    
    public function __construct() {
        $this->conexao = new Connection();  
    }

    //função que verifica se existe no banco algum usuario com mesmo nome
    public function usuarioUnico($login) {
        $unico = "SELECT * FROM usuarios WHERE usuarioLogin = '$login'";
        
        $exec = mysqli_query($this->conexao->getConnection(), $unico);
        if(mysqli_num_rows($exec) > 0) {
            return false;
        } else {
            return true;
        }
    }

    //função que cadastra o usuario no banco
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
}

?>