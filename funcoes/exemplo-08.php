<?php 

function soma(int ...$valores):string{

    return array_sum($valores);

};

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25,100);
echo "<br>";
echo soma (1.5, 22.9);

?>