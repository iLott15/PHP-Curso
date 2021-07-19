<?php 

class Pessoa { //para gerar uma classe, precisa começar com class e importante que toda classe seja começado sempre com letra maíuscula

    public $nome; //para encapsular tem que colocar o mais usado, o public ----- $nome é o atributo da classe Pessoa

    public function falar(){ //método dentro da classe Pessoa.

        return "O meu nome é: ".$this->nome; //$this é a representação da nossa classe já instanciada, nesse caso estamos instanciando a função com o atributo nome dentro da classe Pessoa.

    }

}

$luiz = new Pessoa(); //criando uma variavel "pessoa", com a variavel $luiz
$luiz->nome="Luiz Pascal"; //referenciando uma variável pública
echo $luiz->falar(); //

?>