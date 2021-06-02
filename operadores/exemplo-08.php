<?php 

$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br>";

$resultado1 = (10 + 3) / 2;

echo $resultado1;

echo "<br>";

//$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

//echo $resultado2;

$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

echo var_dump($resultado2);

echo "<br>";

$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

echo var_dump($resultado2);

echo "<br>";

$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

echo var_dump($resultado2);

?>