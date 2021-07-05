<?php 

$a = 10;

function trocaValor(&$b){

    $b += 50;

    return $b;

}

echo trocaValor($b);

echo "<br>";

echo $a;

?>