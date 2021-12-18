<?php   

    #inicializar objetos com valores predefinidos

    class Car{
        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }
    }

    $ferrari = new Car(4, "Vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor ";
    echo "<br>";

    $bmw = new Car(4, "Preta", "BMW");
    echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor ";
    echo "<br>";

    Class Cachorro {
        public $raca;
        public $peso;
        public $nome;

        function __construct($raca, $peso, $nome){

            $this->raca = $raca;
            $this->peso = $peso;
            $this->nome = $nome;
            
        }
    }

    $machao = new Cachorro("SRD", 18, "Machão");
    echo "Meu cachorro se chama $machao->nome, pesa $machao->peso KG e é da raça $machao->raca";