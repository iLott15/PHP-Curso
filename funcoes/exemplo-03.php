<?php 

function ola($texto = "mundo!", $periodo = "Bom Dia"){

    return "Olá $texto! $periodo! <br>";

}

echo ola();
echo ola("", "Boa tarde");
echo ola("Ivan!!", "Boa noite");
echo ola("Visitante!!","");

?>