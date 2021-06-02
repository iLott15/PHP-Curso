<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

//exemplo de como mostrar o ip dinâmico de quem está acessando na tela

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

//exemplo de como mostrar o nome do arquivo

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>