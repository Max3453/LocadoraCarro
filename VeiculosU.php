<?php
require_once 'Veiculo.php';

class VeiculosU extends Veiculo {
  
    private $tipoTracao;
    private $tetoSolar;
    private $diametroAro ;
    private $tipo;
    
    
    
    public function __construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao,$tipoTracao, $tetoSolar, $diametroAro, $tipo) {
        parent::__construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao);
        
        $this->tipoTracao = $tipoTracao;
        $this->tetoSolar = $tetoSolar;
        $this->diametroAro = $diametroAro;
        $this->tipo = $tipo;
    }

        
    public function getTipoTracao() {
        return $this->tipoTracao;
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

    public function setTipoTracao($tipoTracao) {
        $this->tipoTracao = $tipoTracao;
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
