<?php 

$qualASuaIdade = 27;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

//caso vc queira fazer uma condição mais rápida, pode utilizar dessa forma
//? = Else if  e o : = Else

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>