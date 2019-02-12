<?php
require_once 'Veiculo.php';

class VeiculosU extends Veiculo {
  
    private $tipoTração;
    private $tetoSolar;
    private $diametroAro ;
    private $tipo;
    
    
    
    public function __construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação,$tipoTração, $tetoSolar, $diametroAro, $tipo) {
        parent::__construct($carro, $placa, $cor, $modelo, $fabricante, $fabricação, $valordia, $situação);
        
        $this->tipoTração = $tipoTração;
        $this->tetoSolar = $tetoSolar;
        $this->diametroAro = $diametroAro;
        $this->tipo = $tipo;
    }

        
    public function getTipoTração() {
        return $this->tipoTração;
    }

    public function getTetoSolar() {
        return $this->tetoSolar;
    }

    public function getDiametroAro() {
        return $this->diametroAro;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipoTração($tipoTração) {
        $this->tipoTração = $tipoTração;
    }

    public function setTetoSolar($tetoSolar) {
        $this->tetoSolar = $tetoSolar;
    }

    public function setDiametroAro($diametroAro) {
        $this->diametroAro = $diametroAro;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


}
