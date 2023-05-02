<?php 
include 'funcoes.php';
include 'Layout.php';
include 'Funcionario.php';

$layout = new Layout();
$func = new Funcionario();
$func->salarioBruto = 1000;
$func->calculaDesconto(120);
$func->mostraSalario();
