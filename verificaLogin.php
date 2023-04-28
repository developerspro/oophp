<?php
/**
 * usuario: admin
 * senha: admin
 */
include 'funcoes.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if($usuario=="admin" && $senha=="admin"){
  layout('cabecalho');
  layout('menu');
  layout('conteudo');
  layout('rodape');
} else { 
    layout('cabecalho');
    echo "<br>Usuario ou senha invalida<br>";
    layout('principal');
    layout('rodape');
}