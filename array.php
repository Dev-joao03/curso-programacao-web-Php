<?php

//Array [Matriz]
$carros = array("fusca","camaro","ferrari");
$cores = array("azul","vermelho","branco");

//Object [objeto]
class carro {
    public $cor;
    public $modelo;
    public function __construct($cor,$modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function mensagem(){
        return "o carro é $this->cor e o modelo é $this->modelo";
    }
}

$carro1 = new Carro("branco","fusca");
$carro2 = new  carro("vermelho","ferrari");
echo $carro2->mensagem();

?>