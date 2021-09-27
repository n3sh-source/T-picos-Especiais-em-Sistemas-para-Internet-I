<?php
    //Chamando classes
    require_once "Fruta.class.php";
    require_once "Laranja.php";
    require_once "Laranja_Bahia.php";

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
?>