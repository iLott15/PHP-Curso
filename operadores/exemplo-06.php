<?php 

$a = null;

$b = null;

$c = 50;

echo $a ?? $b ?? $c;

echo "<br>";

$a = null;

$b = 15;

$c = 50;

echo $a ?? $b ?? $c;

?>