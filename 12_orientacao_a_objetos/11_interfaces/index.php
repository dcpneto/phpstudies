<?php

    #a palavra reservada é implements

    interface Caracteristicas {

        public function falar();
        const nome = "Djalma";

    }

    class Humano implements Caracteristicas {

        public $idade = 26;

        public function falar(){
            echo "Olá Mundo <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    $djalma = new Humano;

    $djalma->falar();
    $djalma->dizerNome();
