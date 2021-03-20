<?php

private $idUsuario;
private $nomeUsuario;
private $login;
private $senha;
#private $permissao;
private $logado;

function getIdUsuario() {
    return $this->idUsuario;
}

function getNome(){
    return $this->nomeUsuario;
}

function getlogin() {
    return $this->login;
}

function getSenha() {
    return $this->senha;
}

function getLogado() {
    return $this->logado;
}

function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}

function setNome($nome) {
    $this->nome = $nomeUsuario;
}

function setLogin($login) {
    $this->login = $login;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function setLogado($logado) {
    $this->logado = $logado;
}