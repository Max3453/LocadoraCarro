<?php

class Conexao{

private $servidor;
private $nomeBanco;
private $banco;
private $login;
private $senha;

    function __construct($servidor = 'localhost', $nomeBanco = 'atividade', $login='root', $senha='') {
    $this->servidor = $servidor;
    $this->nomeBanco = $nomeBanco;
    $this->login = $login;
    $this->senha = $senha;
    $this->Conectar();
}

public function getServidor() {
    return $this->servidor;
}

public function getNomeBanco() {
    return $this->nomeBanco;
}

public function getLogin() {
    return $this->login;
}

public function getSenha() {
    return $this->senha;
}

public function setServidor($servidor) {
    $this->servidor = $servidor;
}

public function setNomeBanco($nomeBanco) {
    $this->nomeBanco = $nomeBanco;
}

public function setLogin($login) {
    $this->login = $login;
}

public function setSenha($senha) {
    $this->senha = $senha;
}


    public function Conectar(){       
            $this->banco = new mysqli($this->getServidor(), $this->getLogin(), $this->getSenha(), $this->getNomeBanco());       

            if ($this->banco->connect_error){
                die('Erro de conexão('.$this->banco->connect_errno.') :'.$this->banco->connect_error);
                }
    }
   
    public function getBanco() {
        return $this->banco;

    }

    public function Desconectar(){
        $this->banco->close();
    }    


}
    
   