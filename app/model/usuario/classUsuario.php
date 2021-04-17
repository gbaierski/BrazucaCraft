<?php

class Usuario {
    public $conexao;
    public $login;
    public $nome;
    private $senha;
    private $permissao;
    public function __construct() {
        $this->conexao = new Connection();  
    }

    //Função definitiva suprema, basicamente ela persiste os dados não só na propria session como agr tb na classe Usuario.
    public function DeclaraUsuario() {
        $nome = $_SESSION['nome'];
        $this->setNome($nome[0]);
        $senha = $_SESSION['senha'];
        $this->setSenha($senha);
        $login = $_SESSION['login'];
        $this->setLogin($login);
        $permissao = $_SESSION['permissao'];
        $this->setPermissao($permissao[0]);

        $this->DeletaSession();
    }

    private function DeletaSession() {
        #unset($_SESSION['nome']);
        #unset($_SESSION['senha']);
        #unset($_SESSION['login']);
        #unset($_SESSION['permissao']);
    }

    //função que puxa APENAS a senha do usuario do banco
    public function retornaSenhaUsuario($login) {
        $sql = "SELECT usuarioSenha FROM usuarios WHERE usuarioLogin = '$login'";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);

        if(mysqli_num_rows($executa) != 0 ) {
            while( $row = mysqli_fetch_array($executa) ){
                $usuario = $row; 
            }
            return $usuario;
        } else {
            return false;
            }
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
    public function cadastraUsuario($login,$senha,$nome,$permissao) {

        $sql = "INSERT INTO usuarios (usuarioLogin, usuarioSenha, nomeUsuario, permissao) VALUES ('$login','$senha','$nome','$permissao')";
        $executa = mysqli_query($this->conexao->getConnection(), $sql);

        if(mysqli_affected_rows($this->conexao->getConnection()) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //função que loga o usuario
    public function loginUsuario($login) {
        
        $sql = "SELECT * FROM usuarios WHERE usuarioLogin = '$login'";
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
        $this->nome =  $usuario[0];
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

    //Funções Get e Set, ambas são a forma suprema da simplicidade quando se trata de transitar dados entre paginas

    public function getNome() {
        return $this->nome;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function getLogin() {
        return $this->login;
    }
    public function getPermissao() {
        return $this->permissao;
    }
    public function setNome($nomeConsulta) {
        $this->nome = $nomeConsulta;
    }
    public function setSenha($senhaConsulta) {
        $this->senha = $senhaConsulta;
    }
    public function setLogin($loginConsulta) {
        $this->login = $loginConsulta;
    }
    public function setPermissao($permissaoConsulta) {
        $this->permissao = $permissaoConsulta;
    }

    //função que altera o banco o nome do usuario
    /*Obs: Como essa é uma função q ultilza um form, diferente das outras que puxei a função direto na pagina do perfil, 
    nesta achei mais organizado passar os dados para uma função mãe que está no usuario.php, seguindo o padrão das outras
    funções*/
    function AlteraNomeUsuario($nome, $loginPesquisa){
            $setNomeUsuario = "UPDATE usuarios SET nomeUsuario = '$nome' WHERE usuarioLogin = '$loginPesquisa'";
            $executa = mysqli_query($this->conexao->getConnection(), $setNomeUsuario);
        
    }

    function getPlayerAtivo() {
        $data = '';

        $sql = "SELECT jogadores FROM jogadoresativos";
        $exec = mysqli_query($this->conexao->getConnection(), $sql);

        while ($row = mysqli_fetch_array($exec)) {
            $data = $data . '"' . $row['jogadores'] . '",';
        }

        $data = trim($data,",");
        return $data;
    }
    
}

?>