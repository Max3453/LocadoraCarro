<?php
require_once 'Veiculo.php';

class VeiculosP extends Veiculo{
    private $nPortas;
    private $arCondicionado;
    private $dHidraulica;
    
        public function __construct($placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação,$nPortas,$arCondicionado,$dHidraulica) {
            parent::__construct($placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação);
        
            $this->nPortas = $nPortas;
            $this->arCondicionado = $arCondicionado;
            $this->dHidráulica = $dHidraulica;
        }
        
        public function setNPortas($nPortas){
        $this->nPortas = $nPortas; 
        }
        public function getNPortas() { 
        return $this->nPortas; 
        }
    
        public function setArCondicionado($arCondicionado){
        $this->arCondicionado = $arCondicionado; 
        }
        public function getArCondicionado() { 
        return $this->arCondicionado; 
        }
        
        public function setDHidráulica($dHidráulica){
        $this->dHidráulica = $dHidráulica; 
        }
        public function getDHidráulica() { 
        return $this->dHidráulica; 
        }

}
