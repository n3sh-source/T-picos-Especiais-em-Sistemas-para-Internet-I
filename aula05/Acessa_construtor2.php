<?php
    //Importanto o código
    include_once "Pessoa.class.php";
    include_once "Dados_complementares.class.php";

    //Criação do Objeto
    $gustavo = new Pessoa(22111963, 'Gustavo', 1.82, 19, "27/06/2002",
    "4° Ciclo da faculdade", 1000);

    $complemento = new Dados_complementares('Av.Inventada, N°234, Ap 789, Aparecida - Ceilandia/GO','Solteiro','Curso tecnico');

    //Manipulação do Objeto
    echo nl2br("nome:"."\t".$gustavo->get_nome()."\n");
    echo nl2br("cod:"."\t".$gustavo->get_code()."\n");
    echo nl2br("idade:"."\t".$gustavo->get_idade()."\n");
    echo nl2br("altura:"."\t".$gustavo->get_altura()."\n");
    echo nl2br("nascimento:"."\t".$gustavo->get_nascimento()."\n");
    echo nl2br("escolaridade:"."\t".$gustavo->get_escolaridade()."\n");
    echo nl2br("salário:"."\t".$gustavo->get_salario()."\n");

    echo nl2br("\nDADOS COMPLEMENTARES\n");
    echo nl2br("endereço:"."\t".$complemento->get_endereco()."\n");
    echo nl2br("estado civil:"."\t".$complemento->get_estado_civil()."\n");
    echo nl2br("grau de instrução:"."\t".$complemento->get_grau_instrucao()."\n");
    
?>