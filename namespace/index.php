<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lucas Oliveira");
$cad->setEmail("lucol@hotmail.com");
$cad->setSenha("lucol*2()5");

$cad->registrarVenda();

?>