<?php
    //Insere classe
    include_once "automovel.cls.php";

    //Variável de instância
    $carro = new Automovel;

    //Atribuição de valores
    $carro->set_marca($_POST["marca"]);
    $carro->set_cor($_POST["cor"]);
    $carro->set_modelo($_POST["modelo"]);
    $carro->set_preco($_POST["preco"]);

    //Retorno dos valores
    echo nl2br($carro->get_marca()."\n");
    echo nl2br($carro->get_cor()."\n");
    echo nl2br($carro->get_modelo()."\n");
    echo nl2br($carro->get_preco()."\n");
?>