<?php

require_once('../Conexao.php');
require_once('../Motocicletas.php');
require_once ('../Veiculo.php');

class DALCaminhoes {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($VeiculosU){

        $sql = "INSERT INTO `motocicletas` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`, `situacao`, tipoTração, tetoSolar, diametroAro, tipo) VALUES ('";
        $sql = $sql . $VeiculosU->getPlaca()."','";
        $sql = $sql . $VeiculosU->getCor()."','";
        $sql = $sql . $VeiculosU->getModelo()."','";
        $sql = $sql . $VeiculosU->getFabricante()."','";
        $sql = $sql . $VeiculosU->getFabricacao()."','";
        $sql = $sql . $VeiculosU->getSituação()."','";
        $sql = $sql . $VeiculosU->getTipoTração()."','";
        $sql = $sql . $VeiculosU->getTetoSolar()."','";
        $sql = $sql . $VeiculosU->getDiametroAro()."','";
        $sql = $sql . $VeiculosU->getTipo()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
