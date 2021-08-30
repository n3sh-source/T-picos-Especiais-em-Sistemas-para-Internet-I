<?php
    //Importanto o código
    include_once "Pessoa.class.php";

    //Criação do Objeto
    $gustavo = new Pessoa(22111963, 'Gustavo', 1.82, 19, "27/06/2002",
    "4° Ciclo da faculdade", 1000);

    //Manipulação do Objeto
    echo nl2br("nome:"."\t".$gustavo->get_nome()."\n");
    echo nl2br("cod:"."\t".$gustavo->get_code()."\n");
    echo nl2br("idade:"."\t".$gustavo->get_idade()."\n");
    echo nl2br("altura:"."\t".$gustavo->get_altura()."\n");
    echo nl2br("nascimento:"."\t".$gustavo->get_nascimento()."\n");
    echo nl2br("escolaridade:"."\t".$gustavo->get_escolaridade()."\n");
    echo nl2br("salário:"."\t".$gustavo->get_salario()."\n");
?>