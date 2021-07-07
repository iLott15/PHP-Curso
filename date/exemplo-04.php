<?php 
//Classe de data e tempo. Melhor forma para utilizar e obter resultados referente a tempo e data. Utilize mais essa opção em vez do exemplo 1 e 2

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

?>