<?php 

//$ts = strtotime("2001-09-11"); Para pegar uma data específica e saber qual seu dia da semana
//$ts = strtotime("now"); para pegar a data do dia atual
//$ts = strtotime("+1 day"); para pegar a data do dia posterior ao atual
$ts = strtotime("+1 month"); //para pegar a data de 1 mes a frente ao atual, pode ser para ano, hora, minuto, segundo e etc.

echo date("l, d/m/Y", $ts)//escrever na tela o valor to strtotime que foi solicitado dentro do parênteses

?>