<?php 

$nome = "Ivan";

function teste() {
    global $nome;
    echo $nome;
}
//para fazer com que o echo mostre o nome na tela, precisamos declarar a variavel $nome como global

function teste2(){
    $nome = "Lott";
    echo $nome . " agora no teste2";
}
//tambem podemos definir um novo valor para a variavel, colocando dessa forma dentro do function

//chamando as variaveis teste e teste2 para aparecer na tela
teste();

teste2();

?>