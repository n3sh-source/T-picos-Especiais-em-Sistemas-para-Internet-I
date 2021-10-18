<?php
    class Conta_Poupanca extends Conta_Bancaria{
        //Construtor
        public function __construct($agencia, $conta, $saldo){
            parent::__construct($agencia, $conta, $saldo);
        }

        //Metodos
        public function retirar($quantia){
            if($this->saldo >= $quantia){
                $this->saldo -= $quantia;
            }
            else{
                return false; //Retirada NÃO permitida
            }

            return true; //Retirada permitida
        }

        public function contabilizar($saldo){
            $this->saldo += 110.43;
            print "Acessado pela classe Conta_Poupanca <br>\n";
        }
    }
?>