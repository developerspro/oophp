<?php 
include 'funcoes.php';
include 'Layout.php';
include 'Funcionario.php';

$layout = new Layout();
$mariobros = new Funcionario();// construtor

$mariobros->endereco->cep='99999-999';
$mariobros->endereco->estado='São Paulo';
$mariobros->endereco->mostraDados();
echo $mariobros->salarioBruto.'<br>';

$mariobros->salarioBruto = 2000;
echo $mariobros->salarioBruto;
$mariobros->mostraFuncao();
// $func->calculaDesconto(120);
// $func->mostraSalario();
