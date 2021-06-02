<?php 

$anoNascimento = 1993;

$nomeCompleto = "João Alberto Silva Junior";

$nome1 = "João";

$sobrenome = "Alberto";

$nomeCompleto = $nome1 . " " . $sobrenome;

//o " " espaço entre as aspas está ai para poder separar a concatenação, e dessa forma separar o nome1 do sobrenome.

echo $nomeCompleto;

exit;

//$1nome = "João"; Nao pode, pois o 1 na frente, vai dar erro na variável. 

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {

    echo $nome1;

}

//caso queira fazer com que o $nome1 apareça duas vezes, você pode comentar o unset ou deletar a linha.

?>