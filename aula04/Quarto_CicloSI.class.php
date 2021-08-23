<?php
    /*
        Atributos: PRIVADOS
        Metodos: PUBLICOS
    */
    class Quarto_CicloSI{
        //Atributos
        private $materia;
        private $professor;
        private $fatec;
        private $qt_alunos;
        private $periodo;

        /*
        Metodos para inserir e retornar valores dos atributos
        set() e get();

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function get_nome(){
            return $this->nome;
        }
        */

        public function set_materia($materia){
            $this->materia = $materia; 
        }

        public function get_materia(){
            return $this->materia;
        }



        public function set_professor($professor){
            $this->professor = $professor;
        }

        public function get_professor(){
            return $this->professor;
        }



        public function set_fatec($fatec){
            $this->fatec = $fatec;
        }

        public function get_fatec(){
            return $this->fatec;
        }



        public function set_qt_alunos($qt_alunos){
            $this->qt_alunos = $qt_alunos;
        }

        public function get_qt_alunos(){
            return $this->qt_alunos;
        }



        public function set_periodo($periodo){
            $this->periodo = $periodo;
        }

        public function get_periodo(){
            return $this->periodo;
        }
    };
?>