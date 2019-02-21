<?php

require_once('Conexao.php');
require_once('../Motocicletas.php');
require_once ('../Veiculo.php');

class DAOVeiculosP {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($VeiculosP){

        $sql = "INSERT INTO `motocicletas` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`, `situacao`, `nportas`, `arcondicionado`, `dhidraulica`) VALUES ('";
        $sql = $sql . $VeiculosP->getPlaca()."','";
        $sql = $sql . $VeiculosP->getCor()."','";
        $sql = $sql . $VeiculosP->getModelo()."','";
        $sql = $sql . $VeiculosP->getFabricante()."','";
        $sql = $sql . $VeiculosP->getFabricacao()."','";
        $sql = $sql . $Onibus->getValordia()."','";
        $sql = $sql . $VeiculosP->getSituação()."','";
        $sql = $sql . $VeiculosP->getNPortas()."','";
        $sql = $sql . $VeiculosP->getArCondicionado()."','";
        $sql = $sql . $VeiculosP->getDHidraulica()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
