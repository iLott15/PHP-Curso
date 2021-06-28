<?php 

//session_start(); Transformado em comentário pois foi utilizado o require_once
require_once("config.php");

session_unset($_SESSION['nome']); 

echo $_SESSION['nome'];

session_destroy();

//a diferença entre a unset é que ela limpa a variavel de sessão, mas para o site, vc continua sendo a mesma pessoa, já o destroy, ele limpa a variavel e limpa o usuario.

?>