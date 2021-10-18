<?php
    class Consignado extends Conta_Corrente{
        //Atributos
        protected $emprestimo;
        protected $divida;

        //Construct
        public function __construct($agencia, $conta, $saldo, $limite, $divida){
            parent::__construct($agencia, $conta, $saldo, $limite);
            $this->divida = $divida;
        }

        //Metodos
        public function set_emprestimo($emprestimo){
            $this->emprestimo = $emprestimo;
        }

        public function get_emprestimo(){
            return $this->emprestimo;
        }

        public function get_divida(){
            return $this->divida;
        }
    }
?>