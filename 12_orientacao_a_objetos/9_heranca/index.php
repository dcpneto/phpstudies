<?php

    #a palavra reservada é extends

use Programador as GlobalProgramador;

class Humano {
        public $idade = 29;

        public function falar(){
            echo "Olá Mundo <br>";
        }

        private function gritar(){
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixo(){
            echo "faz xiu <br>";
        }

        public function acessarFalarBaixo(){
            $this->falarBaixo();
        }

    }

    class Programador extends Humano {

        public function acessarFalarBaixoProgramador(){
            $this->falarBaixo();
        }

        public function acessarGritarProgramador(){
            $this->acessarGritar();
        }

    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarFalarBaixo();

    $djalma = new Programador;

    $djalma->falar();
    $djalma->acessarFalarBaixoProgramador();
    $djalma->acessarGritarProgramador();