<?php 

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;
    private $estado;
    private $pais;

    public function __construct($a, $b, $c, $d, $e){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        $this->estado = $d;
        $this->pais = $e;

    }

    /*public function __destruct(){

        var_dump("Destruir");

    }*/

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade."/".$this->estado.", ".$this->pais;

    }

}

$meuEndereco = new Endereco("Av. José Bezerra Diniz", "2050", "Belo Horizonte", "Minas Gerais", "Brasil");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

?>