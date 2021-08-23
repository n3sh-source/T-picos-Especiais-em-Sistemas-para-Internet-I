<?php
    //Insere a classe
    include_once 'Quarto_CicloSI.class.php';

    /*
        Criação do objeto ou variável de instância do tipo da classe: "SI"
    */
    $SI = new Quarto_CicloSI;

    //Atribuição dos valores dos atributos
    $SI->set_materia('Programação Orientada a Objetos');
    $SI->set_professor('Mauricio');
    $SI->set_fatec('Baixada Santista');
    $SI->set_qt_alunos(34);
    $SI->set_periodo('manhã');

    //Retorno dos valores
    echo nl2br($SI->get_materia()."\n");
    echo nl2br($SI->get_professor()."\n");
    echo nl2br($SI->get_fatec()."\n");
    echo nl2br($SI->get_qt_alunos()."\n");
    echo nl2br($SI->get_periodo()."\n");
?>