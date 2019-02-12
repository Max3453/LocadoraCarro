<?php

require_once('Conexao.php');
require_once('Caminhoes.php');
require_once ('Veiculo.php');

class DALCaminhoes {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($Caminhoes){

        $sql = "INSERT INTO `caminhoes` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`, `situacao`, `numeroEixos`, `capicadeCarga`, `potencia`) VALUES ('";
        $sql = $sql . $Caminhoes->getPlaca()."','";
        $sql = $sql . $Caminhoes->getCor()."','";
        $sql = $sql . $Caminhoes->getModelo()."','";
        $sql = $sql . $Caminhoes->getFabricante()."','";
        $sql = $sql . $Caminhoes->getFabricacao()."','";
        $sql = $sql . $Caminhoes->getSituação()."','";
        $sql = $sql . $Caminhoes->getNumeroEixos()."','";
        $sql = $sql . $Caminhoes->getCapacidadeCarga()."','";
        $sql = $sql . $Caminhoes->getPotencia()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
