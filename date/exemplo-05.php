<?php 
//Classe de data e tempo. Melhor forma para utilizar e obter resultados referente a tempo e data. Utilize mais essa opção em vez do exemplo 1 e 2. Agora nesse exemplos vamos somar 15 dias a data atual. 

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt->add($periodo); //para subtrair coloque o método sub(); no lugar do add();

echo $dt->format("d/m/Y H:i:s");

?>