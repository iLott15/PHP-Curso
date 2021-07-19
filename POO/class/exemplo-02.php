<?php 
//Set significa...setar, configurar, colocar...quando setamos uma variável, estamos impondo um valor nela.Set significa...setar, configurar, colocar...quando setamos uma variável, estamos impondo um valor nela.
//O método setName($name) por exemplo, vai colocar o valor $name na variável $name do objeto.

//  Para não confundir as coisas, a variável do objeto é definida pro:
//      $this->name
//  E a variável que vem de fora por: $name
//
//  Então, um método setName() que seta um nome para a variável do objeto é:
//      public function setName($name) {
//      $this->name = $name;



//Get significa pegar, acessar...usamos ela para ter controle, pegar alguma informação de uma variável de um objeto, por exemplo, a getName(), retorna o valor da variável $name de um objeto:
//      public function getName() {
//          return $this->name;
//         }
   
}
class carro {
    private $modelo; //Private: protege muito bem o método ou o atributo, não tem acesso a informações sem autorização
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{ //para ter um retorno no motor em float e não string quando se utilza o var_dump para mostrar na tela, coloca-se os dois pontos e int após o parênteses
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{ //para ter um retorno no ano em inteiro e não string quando se utilza o var_dump para mostrar na tela, coloca-se os dois pontos e int após o parênteses
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}
//

$gol = new Carro();
$gol->setModelo("Gol GT"); 
//se tentar definir como apenas modelo = "Gol GT"; irá dar erro fatal, pois é preciso chamar como um parâmetro, sendo da forma correta assim setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2021");

var_dump($gol->exibir);

?>