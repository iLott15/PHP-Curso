<?php
//encapsulamento é um conceito de que: é o ato de proteger, ou controlar quem pode ver oque. Um sinonimo é modificador de acesso.

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        
        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->senha . "</br>";

    }

}
//extends é quando a classe programador vai extender todas as informações de verDados para ela mesmo, exceto o private
class Programador extends Pessoa {

    public function verDados(){
        
        echo get_class($this)."</br>";

        echo $this->nome . "</br>";
        echo $this->idade . "</br>";
        echo $this->senha . "</br>";

    }

}

$objeto = new Programador();

/*echo $objeto->nome . "</br>";
echo $objeto->senha . "</br>";*/

$objeto->verDados(); 
//nesse caso, o método tem acesso aos dados, e por o método ser public, ele mostra as informações que ele teve acesso aos dados
//quando é publico todo mundo tem acesso e vê
//protected só vê na mesma classe e na classe estendida
//privado apenas na mesma classe

?>