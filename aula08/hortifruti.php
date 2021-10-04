<?php
    //Chamando classes
    require_once "Fruta.class.php";
    require_once "Laranja.php";
    require_once "Laranja_Bahia.php";
    
    require_once "Uva.php";
    require_once "Uva_Verde.php";
    require_once "Uva_Rosada.php";

    //Instânciando classes
    //Laranja Bahia
    $f = new Laranja_Bahia("laranja bahia está bem doce");
    $f->set_arvore("laranjeira");
    $f->set_nm_fruta("laranja bahia");
    $f->set_preco(8.22);
    $f->set_cor("Amarelo");

    echo nl2br("Dá na árvore: ".$f->get_arvore()."\n");
    echo nl2br("Fruta: ".$f->get_nm_fruta()."\n");
    echo nl2br("Preço: $".$f->get_preco()." a dúzia"."\n");
    echo nl2br("Cor: ".$f->get_cor()."\n");
    echo nl2br("\n");


    //Laranja
    $g = new Laranja("laranja lima está azeda");
    $g->set_arvore("laranjeira");
    $g->set_nm_fruta("laranja lima");
    $g->set_preco(6.05);
    $g->set_cor("Amarelo-esverdeado");
    
    echo nl2br("Dá na árvore: ".$g->get_arvore()."\n");
    echo nl2br("Fruta: ".$g->get_nm_fruta()."\n");
    echo nl2br("Preço: $".$g->get_preco()." a dúzia"."\n");
    echo nl2br("Cor: ".$g->get_cor()."\n");
    echo nl2br("\n");


    //Fruta
    $h = new Fruta("maçã argentina está bem grande!!!");
    $h->set_arvore("macieira");
    $h->set_nm_fruta("maçã");
    $h->set_preco(12.66);

    echo nl2br("Dá na árvore: ".$h->get_arvore()."\n");
    echo nl2br("Fruta: ".$h->get_nm_fruta()."\n");
    echo nl2br("Preço: $".$h->get_preco()." a dúzia"."\n");
    echo nl2br("\n");    
    
    //Uva_Verde
    $uv = new Uva_Verde("uva verde boa para salada de frutas");
    $uv->atributos();
    $uv->set_madura(True);
    $uv->set_arvore("videira");
    $uv->set_nm_fruta("uva verde");
    $uv->set_preco(14.87);
    $uv->set_origem("Vinhedo");

    echo nl2br("Dá na árvore: ".$uv->get_arvore()."\n");
    echo nl2br("Fruta: ".$uv->get_nm_fruta()."\n");
    echo nl2br("Preço: $".$uv->get_preco()." a dúzia"."\n");
    echo nl2br("\n");

    //Uva_Rosada
    $ur = new Uva_Rosada("uva rosada muito saborosa");
    $ur->atributos();
    $ur->set_madura(False);
    $ur->set_arvore("videira");
    $ur->set_nm_fruta("uva rosada");
    $ur->set_preco(11.34);
    $ur->set_origem("Jundiaí");

    echo nl2br("Dá na árvore: ".$ur->get_arvore()."\n");
    echo nl2br("Fruta: ".$ur->get_nm_fruta()."\n");
    echo nl2br("Preço: $".$ur->get_preco()." a dúzia"."\n");
    echo nl2br("\n");
?>