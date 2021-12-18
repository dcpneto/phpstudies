<?php

class Pessoa{

        function falar(){

            echo "Olá, eu sou um objeto! <br>";

        }

    }

    $djalma = new Pessoa;

    $djalma->falar();


class Cachorro {

    function latir(){
        echo "Au Au! <br>";
    }

    function andar(){
        echo "-O cachorro anda <br>";
    }

}

$machao = new Cachorro;

$machao->latir();
$machao->andar();