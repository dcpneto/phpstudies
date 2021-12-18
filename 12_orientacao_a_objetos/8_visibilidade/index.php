<?php

    #public - pode ser acessado de qqer forma
    #protected - pode ser acessado pelas pela classe de origem ou por herança
    #private - só pode ser acessado pela classo no qual foi criado

    class Car {

        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        /*
        public function peliculaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        } */

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }

    }

    class Mecanico {

        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }

    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $djalma = new Mecanico;
    $djalma->alterarRodas($carro); #a classe mecanico alterou a classe carro

    echo $carro->rodas . "<br>";

    #Não altera pq é privado
    //$djalma->colocarPelicula($carro, "G20");
    //echo $carro->vidro . "<br>";

    echo $carro->getVidro();
    echo "<br>";

    #não é acessivel
    //echo $carro->portas . "<br>";

    echo $carro->getPortas();