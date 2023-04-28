<?php



// function cabecalho(){
//     include 'cabecalho.php';
// }

// function menu(){
//     include 'menu.php';
// }

// function principal(){
//     include 'principal.php';
// }

// function rodape(){
//     include 'rodape.php';
// }

// function conteudo(){
//     include 'conteudo.php';
// }

// function inicio(){
//     cabecalho();
//     menu();
// }

function layout($pagina){
    include $pagina.'.php';
}

function login(){
    layout('cabecalho');
    layout('principal');
    layout('rodape');
}