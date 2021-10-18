<?php
    class Conta_Poupanca1 extends Conta{
        //Construtor
        public function __construct($agencia, $conta, $saldo){
            parent::__construct($agencia, $conta, $saldo);
        }

        //Metodos
        public function retirar($quantia){
           $this->saldo = (100.00 + $quantia);
        }
    }
?>