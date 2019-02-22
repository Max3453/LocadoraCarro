<?php

require_once('../Controller/Conexao.php');
require_once('../VeiculosU.php');
require_once ('../Veiculo.php');

class DAOVeiculosU {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($VeiculosU){

        $sql = "INSERT INTO `veiculou` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`,`valordia`, `situacao`, `tracao`, `tetoSolar`, `diametroAro`, `tipo`) VALUES ('";
        $sql = $sql . $VeiculosU->getPlaca()."','";
        $sql = $sql . $VeiculosU->getCor()."','";
        $sql = $sql . $VeiculosU->getModelo()."','";
        $sql = $sql . $VeiculosU->getFabricante()."','";
        $sql = $sql . $VeiculosU->getFabricacao()."','";
        $sql = $sql . $VeiculosU->getValordia()."','";
        $sql = $sql . $VeiculosU->getSituacao()."','";
        $sql = $sql . $VeiculosU->getTipoTracao()."','";
        $sql = $sql . $VeiculosU->getTetoSolar()."','";
        $sql = $sql . $VeiculosU->getDiametroAro()."','";
        $sql = $sql . $VeiculosU->getTipo()."');";
               
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
