<?php
require_once 'Veiculo.php';

class Caminhoes extends Veiculo {
    
    private $capacidadeCarga;
    private $numeroEixos;
    private $potencia;
    
    public function __construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao,$capacidadeCarga, $numeroEixos, $potencia) {
        parent::__construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao);
        
        $this->capacidadeCarga = $capacidadeCarga;
        $this->numeroEixos = $numeroEixos;
        $this->potencia = $potencia;
        
        
        
    }

   
    
    
    public function getCapacidadeCarga() {
        return $this->capacidadeCarga;
    }

    public function getNumeroEixos() {
        return $this->numeroEixos;
    }

    public function getPotencia() {
        return $this->potencia;
    }

    public function setCapacidadeCarga($capacidadeCarga) {
        $this->capacidadeCarga = $capacidadeCarga;
    }

    public function setNumeroEixos($numeroEixos) {
        $this->numeroEixos = $numeroEixos;
    }

    public function setPotencia($potencia) {
        $this->potencia = $potencia;
    }


}
