<?php
require_once 'Veiculo.php';

class VeiculosP extends Veiculo{
    private $nPortas;
    private $arCondicionado;
    private $dHidraulica;
    
        public function __construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao,$nPortas,$arCondicionado,$dHidraulica) {
            parent::__construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao);
        
            $this->nPortas = $nPortas;
            $this->arCondicionado = $arCondicionado;
            $this->dHidraulica = $dHidraulica;
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
        
        public function setDHidraulica($dHidráulica){
        $this->dHidraulica = $dHidraulica; 
        }
        public function getDHidraulica() { 
        return $this->dHidraulica; 
        }

}
