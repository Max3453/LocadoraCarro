<?php

require_once('../Controller/Conexao.php');
require_once('../Onibus.php');
require_once ('../Veiculo.php');

class DAOOnibus {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($Onibus){

        $sql = "INSERT INTO `onibus` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`,`valordia`, `situacao`, `numeropassageiros`, `numeroeixos`) VALUES ('";
        $sql = $sql . $Onibus->getPlaca()."','";
        $sql = $sql . $Onibus->getCor()."','";
        $sql = $sql . $Onibus->getModelo()."','";
        $sql = $sql . $Onibus->getFabricante()."','";
        $sql = $sql . $Onibus->getFabricacao()."','";
        $sql = $sql . $Onibus->getValordia()."','";
        $sql = $sql . $Onibus->getSituacao()."','";
        $sql = $sql . $Onibus->getPassageiros()."','";
        $sql = $sql . $Onibus->getEixos()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
