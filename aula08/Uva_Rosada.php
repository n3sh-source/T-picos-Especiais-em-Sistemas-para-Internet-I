<?php
    class Uva_Rosada extends Uva_Verde{
        //Metodo construtor
        public function __construct($e){
            parent::__construct($e);
        }

        //Metodos
        public function atributos(){
            echo nl2br("na hierarquia desta herança\n a classe Uva_Rosada aparece como classe filha de Uva_Verde e \npode acessar os atributos origem e madura \n");
        }
    }
?>