<?php
    class Usuario{
        
        //ATRIBUTOS
        private  $nome;
        private  $cpf;
        private  $renda;
        private  $aliquota;
        private  $imposto;

        //MÉTODOS

        //CONSTRUTOR
        public function __construct($nome, $cpf, $renda){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->renda = $renda;
            $this->aliquota = $this->calcularAliquota();
            $this->imposto = $this->calcularImposto();
        }


        //MÉTODOS GETTERS
        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getRenda(){
            return "R$".$this->renda;
        }

        public function getAliquota(){
            return $this->aliquota."%";
        }

        public function getImposto(){
            return "R$".$this->imposto;
        }

        //MÉTODOS SETTERS

        public function setNome(){
            return $this->nome = $nome;
        }

        public function setCpf(){
            return $this->cpf = $cpf;
        }

        public function setRenda(){
            return $this->nome = $nome;
        }

        public function setAliquota(){
            return $this->aliquota = $aliquota;
        }

        public function setImposto(){
            return $this->imposto = $imposto;
        }

        //CALCULA ALIQUOTA
        private function calcularAliquota() {

        if ($this->renda <= 22847.76) {
            return 0;
        }
        else if ($this->renda > 22847.76 && $this->renda <= 33919.80) {
            return 7.5;
        }
        else if ($this->renda > 33919.80 && $this->renda <= 45012.60) {
            return 15;
        }
        else if ($this->renda > 45012.60 && $this->renda <= 55976.16) {
            return 22.5;
        }
        else {
            return 27.5;
        }}

    

         //CALCULA IMPOSTO
         private function calcularImposto() {

         if ($this->aliquota == 0) {
          return 0;
        }   
         else {
             $this->imposto = ($this->renda * $this->aliquota) / 100;

             return ($this->imposto = number_format($this->imposto, 2, '.',''));
       }
    }

 }

?>