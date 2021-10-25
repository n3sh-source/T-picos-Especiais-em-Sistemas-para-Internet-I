<?php
    //Imports
    include_once 'I_Aluno.php';

    //Class
    class Aluno implements I_Aluno{
        //Atributos
        private $Nome;
        private $Responsavel;

        //Metodos da Interface Aluno
        public function setNome($Nome)
        {
            $this->Nome = $Nome;
        }

        public function getNome()
        {
            return $this->Nome;
        }

        public function setResponsavel($Responsavel)
        {
            $this->Responsavel = $Responsavel;
        }

        public function getResponsavel()
        {
            return $this->Responsavel;
        }

        //Metodos da Interface Matrícula
        public function faz_Matricula(){
            echo "<br>\nMatrícula feita no 1°Ano do Colégio Jardim das Flores pelo ";
        }
    }
?>