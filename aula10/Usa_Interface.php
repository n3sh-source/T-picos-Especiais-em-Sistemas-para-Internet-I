<?php
    //Imports
    include_once 'Aluno.php';

    //Instancia
    $f = new Aluno;

    //Atribuição
    $f->setNome('Gustavo');
    $f->setResponsavel('Pai');

    //Retornos
    echo "<br>\nNome do aluno: ". $f->getNome();
    $f->faz_Matricula();
    echo $f->getResponsavel();
?>