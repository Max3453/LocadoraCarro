<?php

require_once('Conexao.php');
require_once('Caminhoes.php');
require_once ('Veiculo.php');

class DALCaminhoes {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($Onibus){

        $sql = "INSERT INTO `caminhoes` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`, `situacao`, `passageiros`, `eixos`, `dhidraulica`) VALUES ('";
        $sql = $sql . $Onibus->getPlaca()."','";
        $sql = $sql . $Onibus->getCor()."','";
        $sql = $sql . $Onibus->getModelo()."','";
        $sql = $sql . $Onibus->getFabricante()."','";
        $sql = $sql . $Onibus->getFabricacao()."','";
        $sql = $sql . $Onibus->getSituação()."','";
        $sql = $sql . $Onibus->getPassageiros()."','";
        $sql = $sql . $Onibus->getEixos()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
