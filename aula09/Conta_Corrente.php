<?php
    class Conta_Corrente extends Conta_Bancaria{
        //Atributos
        protected $limite;

        //Metodo Construtor
        public function __construct($agencia, $conta, $saldo, $limite){

            parent::__construct($agencia, $conta, $saldo);
            $this->limite= $limite;
        }

        //Metodos
        public function retirar($quantia){
            if( ($this->saldo + $this->limite) >= $quantia){
                 $this->saldo -= $quantia;//Retirada permitida
            }
            else{
                return false; //Retirada NÃO permitida
            }

            return true;
        }

        public function contabilizar($saldo){
            $this->saldo -= 0.85;
            print "Acessado pela classe Conta_Corrente <br>\n";
        }
    }
?>