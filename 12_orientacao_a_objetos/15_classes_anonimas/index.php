<?php   
    #São criadas em uma variavel e não possui nome

    $pessoa = new Class(){
        public $nome = "Djalma";

        public function dizerNome(){
            echo "Olá, meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();