<?php
    class Conta_Bancaria{
        //Atributos
        protected $agencia;
        protected $conta;
        protected $saldo;
            //*protected: pode ser acessado pela classe e seus decendentes
        
        //Metodo Construtor
        public function __construct($agencia, $conta, $saldo){
            $this->agencia = $agencia;
            $this->conta = $conta;

            if($saldo >= 0){
                $this->saldo = $saldo;
            };
        }

        //Metodos
        public function getInfo(){
            return "Agência: {$this->agencia}, Conta: {$this->conta} ";
        }

        public function depositar($quantia){
            if($quantia > 0){
                $this->saldo += $quantia;
            };
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function contabilizar($saldo){
            $this->saldo += 60.55;
            print "Acessado pela classe Conta_Bancaria <br>\n";
        }
    }
?>