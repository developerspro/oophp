<?php

class Layout {

    public $cabecalho;
    public $menu;
    public $rodape;
    public $conteudo;

    public function index(){
        include "cabecalho.php";
        include "principal.php";
        include "rodape.php";
    }

    public function logado(){
        include "cabecalho.php";
        include "menu.php";
        include "conteudo.php";
        include "rodape.php";
    }

    public function pagina($pagina){
        include $pagina.'.php';
    }
    



}