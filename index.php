<?php 
include "Aluno.php";

$em = new Aluno();
$et = new Aluno();
$etpi = new Aluno();

$em->nome = "Huguinho";
$em->curso = "Ensino Médio";
$em->email="@";

$et->nome = "Zezinho";
$et->curso = "Informática para Internet";

$etpi->nome = "Luizinho";
$etpi->curso = "Administracao";

echo $em->curso."<br>";
echo $em->nome."<br>";
echo $em->email;

echo "<hr>";

echo $et->curso."<br>";
echo $et->nome."<br>";

echo "<hr>";

echo $etpi->curso."<br>";
echo $etpi->nome."<br>";


$etpi->perguntar("A cor do céu?");
$em->responder("Azul amarelado em tons de cinza");
$em->perguntar("Que dia é hoje?");
$et->perguntar("Teve aula hoje?");

if($em->matriculado==1){
    echo "Aluno matriculado";
} else { 
    echo "Aluno nao matriculado";
    $em->fazerMatricula();

}