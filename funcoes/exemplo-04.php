<?php 

funcion ola(){

    $argumentos = func_get_arg();

    return $argumentos;

}

var_dump (ola("Bom dia", "10"));

?>