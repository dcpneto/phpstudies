<?php
    #Por definição, constantes estão em caixa alta;
    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){

            echo self::BRACOS . "<br>";

        }

    }

    $djalma = new Humano;

    echo $djalma::OLHOS . "<br>"; #Pra chamar diretamente a constante

    $djalma->mostrarConstante(); #pra chamar pela função