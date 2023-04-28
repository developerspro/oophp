<?php
/**
 * usuario: admin
 * senha: admin
 */
include 'funcoes.php';
include 'Layout.php';
$layout = new Layout();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if($usuario=="admin" && $senha=="admin"){
 $layout->logado();
} else { 
   $layout->index();
}