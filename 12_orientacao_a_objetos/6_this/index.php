<?php

    class Animal {

        public $nome;

        function escolherNome($nome){

            $this->nome = $nome;

        }

        function latir(){

            return "Au Au <br>";

        }

        function latirForte(){
            return strtoupper($this->latir());
        }

    }

    $machao = new Animal;

    echo "O nome do animal é: $machao->nome <br>";

    $machao->escolherNome("Machão");

    echo "O nome do animal é: $machao->nome <br>";
    echo $machao->latir();
    echo $machao->latirForte();