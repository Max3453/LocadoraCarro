<?php

require_once('../Conexao.php');
require_once('../Motocicletas.php');
require_once ('../Veiculo.php');

class DALCaminhoes {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($Motocicletas){

        $sql = "INSERT INTO `motocicletas` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`, `situacao`, `potencia`, `tipo`) VALUES ('";
        $sql = $sql . $Motocicletas->getPlaca()."','";
        $sql = $sql . $Motocicletas->getCor()."','";
        $sql = $sql . $Motocicletas->getModelo()."','";
        $sql = $sql . $Motocicletas->getFabricante()."','";
        $sql = $sql . $Motocicletas->getFabricacao()."','";
        $sql = $sql . $Motocicletas->getSituação()."','";
        $sql = $sql . $Motocicletas->getPotencia()."','";
        $sql = $sql . $Motocicletas->getTipo()."');";
        
        echo $sql;
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
}
