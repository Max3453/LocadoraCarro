<?php
require_once 'Veiculo.php';

class Onibus extends Veiculo {
    private $passageiros;
    private $eixos;
    
    public function __construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação,$passageiros, $eixos) {
        parent::__construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação);
        $this->passageiros = $passageiros;
        $this->eixos = $eixos;
    }

    
    public function getPassageiros() {
        return $this->passageiros;
    }

    public function getEixos() {
        return $this->eixos;
    }

    public function setPassageiros($passageiros) {
        $this->passageiros = $passageiros;
    }

    public function setEixos($eixos) {
        $this->eixos = $eixos;
    }


}
