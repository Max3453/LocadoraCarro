<?php
require_once 'Veiculo.php';

class Motocicletas extends Veiculo {
    private $potencia;
    private $tipo;
    
    public function __construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação,$potencia, $tipo) {
        parent::__construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação);
        $this->potencia = $potencia;
        $this->tipo = $tipo;
    }

    
    
    public function getPotencia() {
        return $this->potencia;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setPotencia($potencia) {
        $this->potencia = $potencia;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}
