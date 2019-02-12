<?php
    abstract class Veiculo{
        private $placa;
        private $cor;
        private $modelo;
        private $fabricante;
        private $fabricação;
        private $valordia;
        private $situação;
            
        public function __construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->fabricante = $fabricante;
            $this->fabricação = $fabricacao;
            $this->valordia = $valordia;
            $this->situação = $situacao;
        }

        
        public function setPlaca($placa) {
            $this->placa = $placa;             
        }
        public function getPlaca() {
            return $this->placa;            
        }
        
        
        public function setCor($cor) { 
            $this->cor = $cor;             
        }
        public function getCor() {
            return $this->cor;            
        }
        
        
        public function setModelo($modelo) {
            $this->modelo = $modelo;             
        }
        public function getModelo() { 
            return $this->modelo;             
        }
        
        
        public function setFabricante($fabricante) { 
            $this->fabricante = $fabricante;            
        }
        public function getFabricante() {
            return $this->fabricante;            
        }
        
        
        public function setFabricacao($fabricação) {
            $this->fabricação = $fabricação;             
        }
        public function getFabricacao() {
            return $this->fabricação;             
        }
        
        
        public function setValordia($valordia) {
            $this->valordia = $valordia;             
        }
        public function getValordia() {
            return $this->valordia;             
        }
        
        
        public function setSituação($situação) {
            $this->situação = $situação;             
        }
        public function getSituação() {
            return $this->situação;         
        }
   
        }
    
?>

