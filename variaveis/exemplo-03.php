<?php 

//tipos básicos
$nome = "Ivan";
$site = 'www.atletico.com';

$ano = 2021;
$salario = 5000.99;
$bloqueado = false;

//tipos compostos
$frutas = array("abacaxi", "laranja", "maracujá", "limão");

//echo $frutas [2];

//foi dado // na linha 14 pois queria mostrar apenas o $nascimento na tela

$nascimento = new DateTime();

//var_dump($nascimento);

//foi colocado // novamente na linha 20 para que não aparecesse na tela quando executado

//tipos especiais
$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);


$nulo = NULL;


?>