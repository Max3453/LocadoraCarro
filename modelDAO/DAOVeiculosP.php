<?php

require_once('../Controller/Conexao.php');
require_once('../VeiculosP.php');
require_once ('../Veiculo.php');

class DAOVeiculosP {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($VeiculosP){

        $sql = "INSERT INTO `veiculop` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`,`valordia`,`situacao`,`portas`,`arcondicionado`,`direcaoHidraulica`) VALUES ('";
        $sql = $sql . $VeiculosP->getPlaca()."','";
        $sql = $sql . $VeiculosP->getCor()."','";
        $sql = $sql . $VeiculosP->getModelo()."','";
        $sql = $sql . $VeiculosP->getFabricante()."','";
        $sql = $sql . $VeiculosP->getFabricacao()."','";
        $sql = $sql . $VeiculosP->getValordia()."','";
        $sql = $sql . $VeiculosP->getSituacao()."','";
        $sql = $sql . $VeiculosP->getNPortas()."','";
        $sql = $sql . $VeiculosP->getArCondicionado()."','";
        $sql = $sql . $VeiculosP->getDHidraulica()."');";
        

        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
