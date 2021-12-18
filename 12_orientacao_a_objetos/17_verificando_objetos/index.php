<?php

    class Humano {
        public function falar(){
            echo "Olá";
        }
    }

    $djalma = new Humano;
    $teste = 10;

    if(is_object($djalma)){
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)){
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($djalma) . "<br>";

    if(method_exists($djalma,"falar")){
        echo "Metodo existe <br>";
    } else {
        echo "Metodo não existe <br>";
    }
    
    if(method_exists($djalma,"asd")){
        echo "Metodo existe <br>";
    } else {
        echo "Metodo não existe <br>";
    }