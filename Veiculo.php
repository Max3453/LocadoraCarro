<?php
    abstract class Veiculo{
        private $placa;
        private $cor;
        private $modelo;
        private $fabricante;
        private $fabricacao;
        private $valordia;
        private $situacao;
            
        public function __construct($placa, $cor, $modelo, $fabricante, $fabricacao, $valordia, $situacao) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->fabricante = $fabricante;
            $this->fabricacao = $fabricacao;
            $this->valordia = $valordia;
            $this->situacao = $situacao;
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
        
        
        public function setFabricacao($fabricacao) {
            $this->fabricacao = $fabricacao;             
        }
        public function getFabricacao() {
            return $this->fabricacao;             
        }
        
        
        public function setValordia($valordia) {
            $this->valordia = $valordia;             
        }
        public function getValordia() {
            return $this->valordia;             
        }
        
        
        public function setSituacao($situacao) {
            $this->situacao = $situacao;             
        }
        public function getSituacao() {
            return $this->situacao;         
        }
   
        }
    
?>

